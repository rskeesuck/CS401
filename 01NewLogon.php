<!DOCTYPE html>
<?php $thisPage = "01NewLogon"; ?>

<?php
  session_start();
    $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
    unset($_SESSION['message']);
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

        <div class = "divcontainer">

          <?php if(!empty($messages)) { ?>
            <div class="message"><?php echo $messages; ?></div>
          <?php } ?>

          <div class = "form">
            <h3>New Account?  Sign in Here:</h3>
              <form action="/Loginhandler.php" method = "POST">
                Username: (user email address: jsmith@example.com)<br>
                <input type="text" placeholder = "ex: jsmith@example.com" name="username"><br>
                <br>
                Password: (must contain one letter and one number)<br>
                <input type="text" placeholder = "password here" name="password"><br>
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
