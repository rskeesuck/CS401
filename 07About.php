<!DOCTYPE html>
<html>
    <head>
      <?php include_once "head.php"; ?>
    </head>
    <body>
      <?php
       include_once "navbar.php";
       include_once "header.php";
        ?>

      <div>
        <h2>We'd love to hear from ya...</h2>
      </div>

      <div class = "mainphoto">
          <img src="Coder.jpg" alt= "Hello World!" width="50%" class = "center">
      </div>

      <div>
        <h2>Contact us!</h2>
        <br>
      </div>


      <div class = maintext>
        <p>Lorem ipsum dolor sit amet, commune fabellas delicatissimi ei nec, ornatus comprehensam his ea. Consul phaedrum omittantur ea sea, eum minim simul ea. Aliquip meliore indoctum eos an, ne ius deserunt recteque euripidis. Ut usu mundi legere, cum te dico errem. Duo no justo insolens appellantur. Cu idque consul intellegebat eos, eos id feugait docendi menandri.</p>
        </p>
        <br>
        <p>Lorem ipsum dolor sit amet, commune fabellas delicatissimi ei nec, ornatus comprehensam his ea. Consul phaedrum omittantur ea sea, eum minim simul ea. Aliquip meliore indoctum eos an, ne ius deserunt recteque euripidis. Ut usu mundi legere, cum te dico errem. Duo no justo insolens appellantur. Cu idque consul intellegebat eos, eos id feugait docendi menandri.</p>
        </p>
        <br>
        </div>

        <div>
          <h3>Send us a note!</h3>
          <br>
        </div>

        <div class = "login">
          <form action="/action_page.php">
            First Name:<br>
            <input type="text" name="First" value = "First">
            <br>
            <br>
            Last Name:<br>
            <input type="text" name="LastName" value="Last">
            <br>
            <br>
            email:<br>
            <input type="text" name="email" value="you@place.com">
            <br>
            <br>
            Comment:<br>
            <input type="text" name="comment" value="write your comment here">
            <br>
            <br>
            <br>

            <input type="submit" value="Submit">
          </form>
        </div>

      <?php include_once "footer.php"; ?>

    </body>
</html>
