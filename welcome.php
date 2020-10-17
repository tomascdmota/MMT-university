<?php
  session_start();
  if(isset($_SESSION['userId'])){
    header("Location: mainpage.php?login=success");
    exit();
  }
  else {

  }


?>


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>MMT University</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="welcome-style.css">
        <link rel="icon" href="logo-black.png" type="image/xpng">
        <script src="jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
        <script type="text/javascript" src="nav.js"></script>
      </head>

        </script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>

<?php include('header/header.php') ?>

          <section class="fwh-slide" id="about">
            <img src="quem-somos.png">
          </section>

          <section class="fwh-slide2" id="operations">
            <img src="onde-atuamos.png">
          </section>

        <section class="fwh-slide3" id="servicos">
          <img src="servicos.png">
        </section>

        <section class="fwh-slide4" id="Depoimentos">
          <img src="depoimentos.png">
        </section>

        <section class="fwh-slide5" id="Comecando">
          <img src="comecando.png">
        </section>



        <?php include('sac/sac.php') ?>

    </body>

        <?php include('footer/footer.php');?>

      </body>
    </html>
  </html>
