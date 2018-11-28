<!DOCTYPE html>
<?php $thisPage = "01LogonPage"; ?>

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

      <div class="divcontainer">

        <?php (isset($_SESSION['message']))) {
          foreach($_SESSION['messages'] as $message)
          ?>
          <div class="message">

            <?php echo $message; ?></div>

        <?php
             unset($_SESSION['messages']);
        } ?>

        <div class = "form">
          <h3>Existing Users, Please Sign In:</h3>
          <form action="/Loginhandler.php" method = "POST">
           <label for="username">Username:</label><br><br>
				    <input type="text" name="username" id="username" value="<?php echo isset($_SESSION['presets']['username']) ? $_SESSION['presets']['username'] : ''; ?>"><br>
            <br>
            <label for="password">Password:</label><br><br>
            <input type="text" placeholder = "password here" name="password" id="password"><br>
            <br>
            Sign In:<br><br>
            <button type="submit" value="LoginButton" name="LoginButton">Login</button>
            <br>
            <br>
          </form>
          <h3>New to SchoolBROS?  Enter a Username and Password above and start here!</h3>
          <form action="/Loginhandler.php" method = "POST">
            New Account?<br><br>
            <button type="submit" value="CreateButton" name="CreateButton">Create New Account</button>
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
