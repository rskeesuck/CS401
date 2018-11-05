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

      <div class="divcontainer">
        <div class = "form">
          <h3>Please Sign In:</h3>
          <form action="/action_page.php">
            Username:<br>
            <input type="text" name="username"><br>
            Password:<br>
            <input type="text" name="password"><br>
            Submit:<br>
            <input type="submit" value="Submit">
            <br>
          </form>
          <h3>New Account?  Sign in Here:</h3>
          <form action="/action_page.php">
            Username: (user email address: jsmith@example.com)<br>
            <input type="text" name="username"><br>
            Password: (must contain at least one letter and one number)
            <input type="text" name="password"><br>
            First Name:<br>
            <input type="text" name="username"><br>
            Last Name:<br>
            <input type="text" name="password"><br>
            Submit:<br>
            <input type="submit" value="Submit">
            <br>
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
