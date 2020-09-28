<?php

if (isset($_POST['reset-request-submit'])) {

  $selector = bin2hex(random_bytes(8));
  $token = random_bytes(32);


  $url = "www.universitymmt.com/create-new-password.php?selector=".$selector. "&validator="
   .bin2hex($token);

  $expires = date("U") + 1800;

  require 'db_connection.php';

  $userEmail = $_POST["email"];

  $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
  $stmt =  mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Aconteceu algo inesperado.";
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, 's', $userEmail);
    mysqli_stmt_execute($stmt);
  }

  $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector,pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
  $stmt =  mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Aconteceu algo inesperado.";
    exit();
  }
  else {
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, 'ssss', $userEmail, $selector, $hashedToken, $expires);
    mysqli_stmt_execute($stmt);
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  $to = $userEmail;

  $subject = 'Reponha a sua senha para a University MMT';

  $message = "<p>A University MMT recebeu um pedido para repor a senha desta conta. O link para a repor está afixado em baixo.<br>
   Se você não realizou esse pedido, por favor, ignore este email.</p>";

   $message .= "Aqui está o link para redefinir a sua senha: <br>";
   $message .= " . $url";

   $headers = "From: UniversityMMT <suporte@universitymmt.com>\r\n";
   $headers .= "Reply-To: suporte@universitymmt.com";
   $header .= "Content-type: text/html\r\n";

   mail($to, $subject, $headers, $message);
   header("Location: reset-password.php?reset=success");

} else {
  header("Location: welcome.php");
}
