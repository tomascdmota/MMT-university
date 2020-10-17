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
	<section class="fwh-slide" >
		<img src="login-background.png">
	</section>
	<nav>
		<div class="logo">
			<img src="mmt-white.png" alt="logo">
		</div>

		<ul class="nav-links">
			<li><a href="welcome.php">Home<a></li>
			<li><a href="/servicos">Servicos<a></li>
			<li><a href="/Depoimentos">Depoimentos<a></li>
			<li><a href="/Comecando">Comecando<a></li>
			<li><a href="/sac">Contacte-nos<a></li>
			</ul>

			<a class="cta" href="login.php">Acessar</a>

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
        <h3>Bem vindo!</h3>
        <img src="logo-solo.png" alt="logo2">
      </div>


      <div class="right">
        <div class="tabs">
          <ul>
          <li class="login_li"> Acessar </li>
          <li class="register_li"> Registrar</li>
        </ul>
      </div>



			<form class="form-signup" action="signup.inc.php" method="post">

				<?php
				if (isset($_GET['error'])) {
					if ($_GET['error'] == "emptyfields") {
						echo '<p class="signuperror"> Preencha todos os campos!</p>';
					} else if($_GET['error'] == "wrongpwd"){
						echo '<p class="signuperror"> A sua senha está errada!</p>';
					}
					else if($_GET['error'] == "nouser"){
						echo '<p class="signuperror">Não existe ninguém cadastrado com esse Email/Usuário!</p>';
					}

				}
			?>
      		<div class="login">
        	<div class="input_field">
          	<input type="text" name="mailuid" placeholder="Email/Username" class="input" required>
        </div>
        <div class="input_field">
          <input type="password" name="pwd" placeholder="Senha" class="input" required>
        	</div>
					<button type="submit" class="btn" name="login-submit">Acessar</button>
					<button type="submit" class="btn" name=""><a href="reset-password.php" style="text-decoration:none;">Esqueci a minha senha</a></button>
					<?php
						if(isset($_GET["newpwd"])){
							if($_GET["newpwd"] == "passwordupdated"){
								echo '<p class="signupsucess">A sua senha foi reposta!</p>';
							}
						}
					 ?>



      	</div>

			</form>


		<form class="form-signup" action="login.inc.php" method="post">
			<?php
			if (isset($_GET['error'])) {
				if ($_GET['error'] == "emptyfields") {
					echo '<p class="signuperror"> Preencha todos os campos!</p>';
				} else if($_GET['error'] == "invalidemail"){
					echo '<p class="signuperror">Por favor introduza um email válido!</p>';
				}
				else if($_GET['error'] == "invalidUser"){
					echo '<p class="signuperror">Por favor introduza um Usuário válido!</p>';
				}
				else if($_GET['error'] == "passwordsdonotmatch"){
					echo '<p class="signuperror">As duas senhas não combinam!</p>';
				}
			}
			else if ($_GET['signup'] == "success"){
				echo '<p class="signupsucess">Utilizador registado com sucesso</p>';
			}?>
      	<div class="register">
        	<div class="input_field">
          	<input type="text" name="uid" placeholder="Usuário" class="input" required>
        		<input type="text" name="mail" placeholder="Email" class="input" required>
        		<input type="password" name="pwd" placeholder="Senha" class="input" required>
						<input type="password" name="pwd-repeat" placeholder="Repita a sua Senha" class="input" required>
						<button type="submit" class="btn" name="signup-submit">Registrar</button>
			</div>


      			</div>

				</form>

			</div>

		</div>

	</div>


	</body>

</html>
