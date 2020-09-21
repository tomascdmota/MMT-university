<?php

?>


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>MMT University</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="welcome-style.css">
        <link rel="icon" href="logo-black.png" type="image/xpng">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
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
          <script type="text/javascript">
            $(function(){
              $(".nav-links a").on('click', function(){
                $("html, body").animate({
                  scrollTop: $($.attr(this, 'href')).offset().top
                }, 300);
              });
            });

          </script>


        <div class="container">
        <div class="parallax" id="about">

            </div>

          <div class="parallax2" id="servicos">
          </div>
        </div>


    </body>
</html>
