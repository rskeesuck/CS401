<!DOCTYPE html>
<?php $thisPage = "02UserHome"; ?>
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
			<div class = "form" class = "mainlog">
					<h3>Record Incident with Student(s):</h3>
					<form action="/03Record.php">
						Record Here:<br>
						<br>
						<button type="submit" value="GoToRecord" name="RecordButton">Record Incident</button>
						<br>
						<br>
					</form>
					<form action="/04Reports.php">
						Individual Student Report:<br>
						<br>
						<button type="submit" value="GoToReport" name="ReportButton"> Student Report</button>
					</form>
			</div>
		</div>
      <br>
      <div class = "photo">
        <img src="Pencils.jpg" alt= "Pencils" width =75% class="center">
      </div>

      <?php include_once "footer.php"; ?>

    </body>
</html>
