<!DOCTYPE html>
<?php $thisPage = "01LogonPage"; ?>

<?php
  session_start();
    $message = $_SESSION['message'];
?>
<html>
    <head>
      <?php include_once "head.php"; ?>
    </head>
    <body>
      <?php
       include_once "navbar.php";
       include_once "header.php";
        ?>

      <div class="divcontainer">

        <?php if(!empty($message)) { ?>
          <div class="message"><?php echo "here"; ?></div>
        <?php
             unset($_SESSION['message']);
        } ?>

        <div class = "form">
          <h3>Please Sign In:</h3>
          <form action="/Loginhandler.php" method = "POST">
           Username:<br>
            <input type="text" placeholder = "username here" name="username"><br>
            <br>
            Password:<br>
            <input type="text" placeholder = "password here" name="password"><br>
            <br>
            Submit:<br>
            <button type="submit" value="LoginButton" name="LoginButton">Login</button>
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
