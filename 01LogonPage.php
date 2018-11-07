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
          <form action="/Loginhandler.php">
            Username:<br>
            <input type="text" name="username"><br>
            <br>
            Password:<br>
            <input type="text" name="password"><br>
            <br>
            Submit:<br>
            <input type="submit" value="Submit">
            <br>
          </form>
          <form action="/01NewLogon.php">
            New Account?<br>
            <input type="submit" value="Submit">
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
