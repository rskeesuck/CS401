<!DOCTYPE html>
<?php $thisPage = "01NewLogon"; ?>

<?php
  session_start();
    $message = $_SESSION['messages'];
?>
<html>
    <head>
      <?php include_once "head.php"; ?>
    </head>
    <body>
      <?php
      if(!empty($_SESSION["logged_in"])){
        include "loggedin_navbar.php";
      }else{
        include "navbar.php";
      }
       include_once "header.php";
        ?>

        <div class = "divcontainer">

          <?php if(!empty($message)) { ?>
            <div class="message"><?php echo $message; ?></div>
          <?php
          unset($_SESSION['messages']);
          } ?>

          <div class = "form">
            <h3>New Account?  Sign in Here:</h3>
              <form action="/Loginhandler.php" method = "POST">
                <label for="username">Username:</label><br>
                <input type="text" placeholder = "Username" name="username" id="username"><br>
                <br>
                <label for="password">Password: (must contain at least one capital letter and number)</label><br>
                <input type="text" placeholder = "password here" name="password" id="password"><br>
                <br>
                Submit:<br>
                <button type="submit" value="CreateButton" name="CreateButton">Create New Account</button>
                <br>
              </form>
          </div>
        </div>

    <?php include_once "footer.php"; ?>

    </body>
</html>
