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
        <div class = "login">
          <form action="/action_page.php">
            Username:<br>
            <input type="text" name="username" value = "username">
            <br>
            Password:<br>
          <input type="text" name="password" value="password">
          <br>
          <br>
          <br>
          <input type="submit" value="Submit">
        </form>
      </div>

      <br>

      <div class = "photos">
        <img src="Lockers.png" alt= "Student Lockers" width =20% class="center">
      </div>

      <?php include_once "footer.php"; ?>

    </body>
</html>
