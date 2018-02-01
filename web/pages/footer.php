<?php
//
//footer html dokumentu
//cela patička
//
?>

<footer id="kontakt" class="page-footer orange">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="thin white-text">Kontakt</h5>
        <div class="">
          <ul>
            <li><i class="tiny material-icons">perm_identity</i> <b>Jan Jarolík</b></li>
            <li><i class="tiny material-icons">phone</i> 731 211 340</li>
            <li><i class="tiny material-icons">email</i> jarolik.jan@seznam.cz</li>
          </ul>
        </div>
      </div>

      <div class="col l5 s12">
        <h5 class="thin white-text">Kontaktní formulář</h5>
        <div class="row">
          <form action="script/send-email.php" method="post" class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input name="jmeno" id="first_name" type="text" class="validate">
                <label for="first_name">Vaše jméno</label>
              </div>
              <div  class="input-field col s6">
                <input name="email" id="mail" type="email" class="validate">
                <label for="mail">Váš email</label>
              </div>
              <div class="input-field col s12">
                <textarea name="content" id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Zpráva</label>
              </div>
              <div class="col s12">
                <input name="submit" type="submit" class="amber darken-1 waves-effect waves-light btn">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2017 Jan Jarolík
    <span class="grey-text text-lighten-4 right">Made with <span class="red-text darken-2">&hearts;</span> by <a class="orange-text text-lighten-3" href="http://osia.cz">OSIA Team</a></span>
    </div>
  </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script src="js/click-scroll.js"></script>
<script src="bxslider/jquery.bxslider.min.js"></script>
<script>
 $(document).ready(function(){
    $('.parallax').parallax();
    $('.bxslider').bxSlider();
  });
</script>

</body>
</html>
