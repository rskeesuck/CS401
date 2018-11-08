<!DOCTYPE html>
<?php $thisPage = "08Secret"; ?>
<?php
session_start();
if (empty($_SESSION['logged_in'])) {
		header('Location: 01LogonPage.php');
		exit;
  }
  ?>
<html>
    <head>
      <?php include_once "head.php"; ?>
    </head>
    <body>
			<?php include_once "loggedin_navbar.php"; ?>
    <div class="divcontainer">
      <h2>When coding has gone to your brain!</h2>
        <div class="photo">
          <img src="Ryan.jpg" alt= "Crazed Teacher" width="100%" class = "center">
        </div>
        <div>
          <h3>I'm sure you'd like to go back...</h3>
          <a href="00MainPage.php" class="button">Go Back To Home</a>
        </div>
    </div>
    </body>
</html>
