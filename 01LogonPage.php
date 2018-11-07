<!DOCTYPE html>
<?php $thisPage = "01LogonPage"; ?>
<html>
    <head>
      <?php include_once "head.php"; ?>
    </head>
    <body>
      <?php
       include_once "navbar.php";
       include_once "header.php";
        ?>
        <?php if (isset($_SESSION['messages'])) {
          foreach ($_SESSION['messages'] as $message) {?>
              <div class="message <?php echo isset($_SESSION['validated']) ? $_SESSION['validated'] : '';?>"><?php
              echo $message; ?></div>
        <?php  }
         unset($_SESSION['messages']);
        ?> </div>

      <div class="divcontainer">
        <div class = "form">
          <h3>Please Sign In:</h3>
          <form action="/Loginhandler.php">
           Username:<br>
            <input type="text" placeholder = "username here" name="username"><br>
            <br>
            Password:<br>
            <input type="text" placeholder = "password here" name="password"><br>
            <br>
            Submit:<br>
            <button type="submit" value="Login" name="LoginButton">Login</button>
            <br>
            <br>
          </form>
          <form action="/01NewLogon.php">
            New Account?<br>
            <button type="submit" value="NewAccount" name="NewAccountButton"> New Account</button>
          </form>

        </div>
        <br>
        <div class = "photos">
        <img src="Lockers.png" alt= "Student Lockers" width =100% class="center">
        </div>
      </div>
      <?php include_once "footer.php"; ?>

    </body>
</html>
