<!DOCTYPE html>
<?php $thisPage = "01NewLogon"; ?>
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

        <div class = "divcontainer">
          <div class = "form">
            <h3>New Account?  Sign in Here:</h3>
              <form action="/Loginhandler.php">
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
