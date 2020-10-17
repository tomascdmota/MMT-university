<?php
  include_once "header.php";
 ?>
 <head>
   <link rel="stylesheet" href="css/signup.css">
 </head>

 <section class="signup-form">
   <h2> Sign Up</h2>
   <form action="signup.inc.php" method="post">
     <input type="text" name="name" placeholder="Nome completo...">
     <input type="text" name="email" placeholder="Email...">
     <input type="text" name="uid" placeholder="Usuário...">
     <input type="password" name="pwd" placeholder="Senha...">
     <input type="password" name="name" placeholder="Repita a sua senha...">
     <button type="submit" name="submit">Registrar</button>

   </form>
 </section>
