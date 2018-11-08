<!DOCTYPE html>
<?php session_start(); ?>
<?php $thisPage = "00MainPage"; ?>
<html>
    <head>
      <?php include_once "head.php"; ?>
    </head>
    <body>
      <?php
      if(!empty($_SESSION("logged_in"))){
        include_once "loggedin_navbar.php";
      }else{
        include_once "navbar.php";
      }
       include_once "header.php";
        ?>

      <div class = "photo">
          <img src="TeacherMAIN01.png" alt= "Teacher writing on board" width="100%">
      </div>

    <div class = "divcontainer">
        <div class = "form" class = "mainlog">
            <h3>Please Sign In:</h3>
            <form action="/01LogonPage.php">
              Users Logon Here:<br>
              <br>
              <button type="submit" value="GoToLogon" name="GoToLogon">Login Page</button>
              <br>
              <br>
            </form>
            <form action="/01NewLogon.php">
              New to SchoolBROS?<br>
              <br>
              <button type="submit" value="NewAccount" name="NewAccountButton"> Set Up New Account</button>
            </form>
        </div>
        <br>
    </div>

    <br>

      <h3>Track School-wide B-RTI programs in real time.</h3>

      <div class = "maintext">
        <p>Easily collect behavior data on your class and for any student in the building.  Pull reports from the student you are tracking to search for patterns in behavior.</p>
      </div>

      <div class = "photo">
        <img src="Lockers.png" alt= "Student Lockers" width =33%>
        <img src="Students.png" alt= "Student Lockers" width =33%>
        <img src="Graduate.png" alt= "Student Lockers" width =33%>
      </div>

      <?php include_once "footer.php"; ?>
    </body>
</html>
