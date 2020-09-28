
<!DOCTYPE>
  <html>
     <div class="wrapper-main">
       <section class="section-default">

        <h1>Reponha a sua senha</h1>
          <p>Vai lhe ser enviado um email com as instruções para repor a sua senha.</p>
          <form class="" action="reset-request.inc.php" method="post">
              <input type="text" name="email" placeholder="Introduza o seu email">
              <button type="submit" submit="reset-request-submit" name="reset-request-submit">Receber uma nova senha</button>
          </form>

          <?php
              if(isset($_GET["reset"])){
                if ($_GET["reset"] == "success"){
                  echo '<p class="signupsucess">Veja o seu email</p>';
                }
              }

           ?>
       </section>
      <div>
  <html>
