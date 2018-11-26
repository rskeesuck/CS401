<!DOCTYPE html>
<?php session_start(); ?>
<?php $thisPage = "00MainPage"; ?>
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
       include "header.php";
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
        <img class="mySlides" src="Lockers.png" style="width:100%">
        <img class="mySlides" src="Students.png" style="width:100%">
        <img class="mySlides" src="Graduate.png" style="width:100%">

        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div>

        <script>
          var slideIndex = 1;
          showDivs(slideIndex);

          function plusDivs(n) {
            showDivs(slideIndex += n);
          }

          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length} ;
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
          }
          </script>

      <?php include_once "footer.php"; ?>
    </body>
</html>
