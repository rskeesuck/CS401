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

        <div class = "divcontainer">
          <div class = "form">
            <h3>New Account?  Sign in Here:</h3>
              <form action="/Loginhandler.php">
                First Name:<br>
                <input type="text" name="firstname"><br>
                <br>
                Last Name:<br>
                <input type="text" name="lastname"><br>
                <br>
                Username: (user email address: jsmith@example.com)<br>
                <input type="text" name="username"><br>
                <br>
                Password: (must contain one letter and one number)<br>
                <input type="text" name="password"><br>
                <br>
                Submit:<br>
                <input type="submit" value="NewAccount">
                <br>
              </form>
          </div>
        </div>

    <?php include_once "footer.php"; ?>

    </body>
</html>
