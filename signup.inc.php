<?php

if (isset($_POST['login-submit'])) {
  require 'db_connection.php';

  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];
  $query = mysqli_query($conn, $sql);

  if (empty($mailuid) || empty($password)) {
    header("Location: login.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: login.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['pwdUsers']);

        while ($row = mysqli_fetch_array($query)) {
          $vkey         = $row['vkey'];
          $verified     = $row['verified'];
        }
        if ($pwdCheck == false) {
          header("Location: login.php?error=wrongpwd");
          exit();
        }
        else if($pwdCheck == true &&  $verified == '1') {
          session_start();
          $_SESSION['userId'] = $row['idUsers'];
          $_SESSION['userUid'] = $row['uidUsers'];
          $_SESSION['vkey']  = $vkey;
          $_SESSION['verified'] = $verified;
          header("Location: mainpage.php?login=success");
          exit();



        }
        else {
          header("Location: login.php?error=wrongpwd");
          $verificationRequiredErr = '<div class="alert alert-danger">
                            Tem quer verificar a conta antes de acessar.
                        </div>';
          exit();
        }
      }
      else {
        header("Location: login.php?error=nouser");
        exit();
      }
  }
}
}
else {
  header("Location: mainpage.php?login=success");
  exit();
}
