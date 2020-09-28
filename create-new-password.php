
<!DOCTYPE>
  <html>
     <div class="wrapper-main">
       <section class="section-default">

        <?php
          $selector = $_GET['selector'];
          $validator = $_GET['validator'];

          if (empty($selector) || empty($validator)) {
            echo 'O seu pedido não pode ser validado';
          } else {
            if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>

                <form action="reset-password.inc.php" method="post">
                  <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                  <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                  <input type="password" name="pwd" placeholder="Introduza a nova senha...">
                  <input type="password" name="pwd-repeat" placeholder="Repita a sua senha...">
                  <button type="submit" name="reset-password-submit">Submeter</button>
                </form>

                <?php
            }
          }
         ?>
       </section>
      <div>
  <html>
