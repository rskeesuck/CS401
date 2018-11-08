<!DOCTYPE html>
<?php $thisPage = "02UserHome"; ?>
<?php
if (!isset($_SESSION['logged_in']) {
		header('Location: 01LogoPage.php');
		exit;
  }
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

      <div class = "signup">
          <a href="03Record.php">Record Incident</a>
            <br>
      </div>
      <br>
      <div class = "signup">
          <a href="04Reports.php">Student Report</a>
      </div>
    </div>
      <br>
      <div class = "photo">
        <img src="Pencils.jpg" alt= "Pencils" width =50% class="center">
      </div>

      <?php include_once "footer.php"; ?>

    </body>
</html>
