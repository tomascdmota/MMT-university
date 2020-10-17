<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="header.css">
  </head>




            <nav>
              <div class="logo">

                <div class="social-media-icons">
                <a href="https://www.instagram.com/mmtuniversity_oficial/" class="fa fa-instagram" target="_blank"></a>



              <a href="https://www.youtube.com/channel/UCuf2KhhA8Ub3hcSgfaziiDw" class="fa fa-youtube" target="_blank"></a>
                </div>
              <img src="mmt-white.png" alt="logo">
              </div>


              <ul class="nav-links">
                <li ><a href="#about">Home<a></li>
                <li class="active"><a href="#operations" >Onde Atuamos</a></li>
                <li><a href="#servicos" >Serviços<a></li>
                <li><a href="#Depoimentos">Depoimentos<a></li>
                <li><a href="#Comecando" >Começando<a></li>
                <li><a href="#sac">Contacte-nos<a></li>
                </ul>

                <a class="cta" href="login.php" key="login">Acessar</a>

                <script type="text/javascript">

                  $("a").click(function() {
                    $("a").css("background-color","");
                    $(this).css("background-color", "black");
                  });

                </script>




            <div class="burger">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>

            </div>
            </nav>
            <script src="mobile.js"></script>
            <script type="text/javascript">
                    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                          anchor.addEventListener('click', function (e) {
                          e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
    });
  });

            </script>
