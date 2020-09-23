
<?php
session_start();
$_SESSION['message'] = '';


include("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// code...
	if($_POST['password'] == $_POST['password']){
		$username = $conn-> real_escape_string($_POST['username']);
		$email = $conn->real_escape_string($_POST['Email']);
		$Password = md5($_POST['password']); //md5 hash password security

	}
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Acessar MMT University</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel="icon" href="logo-black.png" type="image/xpng">
	<link rel="stylesheet" href="style.css">



	<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>

	<script>
		$(document).ready(function(){
			$(".login").hide();
			$(".register_li").addClass("active");

			$(".login_li").click(function(){
			  $(this).addClass("active");
			  $(".register_li").removeClass("active");
			  $(".login").show();
			   $(".register").hide();
			})

			$(".register_li").click(function(){
			  $(this).addClass("active");
			  $(".login_li").removeClass("active");
			  $(".register").show();
			   $(".login").hide();
			})
		});
	</script>
</head>



<body>
	<nav>
		<div class="logo">
			<img src="mmt-white.png" alt="logo">
		</div>

		<ul class="nav-links">
			<li><a href="welcome.php">Home<a></li>
			<li><a href="#servicos">Servicos<a></li>
			<li><a href="#">Depoimentos<a></li>
			<li><a href="#">Comecando<a></li>
			<li><a href="#">Contacte-nos<a></li>
			</ul>

			<a class="cta" href="Login.php">Acessar</a>

	<div class="burger">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>

	</div>
	</nav>
	<script src="mobile.js"></script>

	<div class="container">



  <div class="wrapper">

      <div class="left">
        <h3>MMT University</h3>
        <img src="logo-solo.png" alt="logo2">
      </div>


      <div class="right">
        <div class="tabs">
          <ul>
          <li class="login_li"> Acessar </li>
          <li class="register_li"> Registrar</li>
        </ul>
      </div>



			<form action="signup.inc.php" method="post">
				<div class="alert alert-error"> <?= $_SESSION['message']?></div>
      		<div class="login">
        	<div class="input_field">
          	<input type="text" name="mailuid" placeholder="Email/Username" class="input" required>
        </div>

        <div class="input_field">
          <input type="text" name="password" placeholder="Senha" class="input" required>
        	</div>

					<div class="btn"> Acessar</div>

          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-youtube"></a>
      	</div>

			</form>


		<form class="form-signup" action="login.inc.php" method="post">
      	<div class="register">
        	<div class="input_field">
          	<input type="text" name="uid" placeholder="Usuário" class="input" required>
        		<input type="text" name="mail" placeholder="Email" class="input" required>
        	<input type="password" name="pwd" placeholder="Senha" class="input" required>
					<input type="password" name="pwd-repeat" placeholder="Repita a sua Senha" class="input" required>
					<button type="submit" class="btn" name="signup-submit">Registrar</button>
			</div>

      <a href="https://www.instagram.com/mmtuniversity_oficial/" class="fa fa-instagram" target="_blank"></a>
      <a href="https://www.youtube.com/channel/UCuf2KhhA8Ub3hcSgfaziiDw" class="fa fa-youtube" target="_blank"></a>

      			</div>

				</form>

			</div>

		</div>

	</

	</body>

</html>
