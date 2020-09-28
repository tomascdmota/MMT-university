<?php

if (isset($_POST['reset-password-submit'])) {

  $selector = $_POST['selector'];
  $validator = $_POST['validator'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];

  if(empty($password) || empty($passwordRepeat)){

  header('Location: create-new-password.php?newpwd=empty');
  exit();


} else if($password !== $passwordRepeat){
  header('Location: create-new-password.php?newpwd=pwddontmatch');
  exit();

}
  $currentDate = date("U");
  require 'db_connection.php';


  $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
  $stmt = mysqli_prepare($conn, $sql);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Aconteceu algo inesperado.";
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, 's', $selector);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if(!$row = $result){
        echo "Por favor tente outra vez";
        exit();
    } else {

      $tokenBin = hex2bin($validator);
      $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

      if($tokenCheck === false){
        echo "Por favor tente outra vez";
        exit();
      } elseif ($tokenCheck === true){

        $tokenEmail = $row['pwdResetEmail'];

        $sql = "SELECT * FROM users WHERE emailUsers=?;";
        $stmt =  mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "Aconteceu algo inesperado.";
          exit();
        } else {
          mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
          mysqli_stmt_execute($stmt);

          $result = mysqli_stmt_get_result($stmt);
          if(!$row = mysqli_fetch_assoc($result)){
              echo "Ocorreu um erro!";
              exit();
          } else {
            $sql = "UPDATE users SET pwdUsers=? WHERE emailUsers=?;";
            $stmt =  mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "Aconteceu algo inesperado.";
              exit();
            } else {
              $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
              mysqli_stmt_execute($stmt);

              $sql = 'DELETE FROM pwdReset WHERE pwdResetEmail=?';
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo "Ocorreu um error!";
                  exit();
                } else {
                  mysqli_stmt_bind_param($stmt, 's', $tokenEmail);
                  mysqli_stmt_execute($stmt);
                  header("Location: login.php?/newpwd=passwordupdated");
                }
            }

          }
        }

      }
    }
  }

}
else {
  header("Location: welcome.php");
}
