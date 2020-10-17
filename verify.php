<?php

  require 'db_connection.php';

  $token = $_GET['vkey'];

  $update = "UPDATE users SET verified = 1 WHERE vkey = '$token'";

  $result = mysqli_query($conn,$update);

  if ($result ) {
    echo "it works";
  } else {
    echo "error";
  }
 ?>


 <!DOCTYPE>
  <html>
    <body>
        <h1> Bem vindo ao University</h1>
        <h2>A sua conta foi agora verificada, já pode acessar e entrar na plataforma!<br>
        Até já.</h2>
        <a class="btn btn-lg btn-success" href="login.php"
               >Click to Login
            </a>
  </body>

  </html>
