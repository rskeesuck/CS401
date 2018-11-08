<!DOCTYPE html>
<?php $thisPage = "04Reports"; ?>
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
      <?php
       include_once "loggedin_navbar.php";
       include_once "header.php";
        ?>
    <div class = "divcontainer">
      <h4>Create an Individual Student Report</h4>
      <br>




    </div>
      <div class = "photo">
          <img src="FakeNews.jpg" alt= "Fake Newspaper" width="50%" class = "center">
      </div>

      <?php include_once "footer.php"; ?>

    </body>
</html>
