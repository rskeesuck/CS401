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
        <img class="mySlides" src="MAIN01.png" style="width:80%">
        <img class="mySlides" src="MAIN02.png" style="width:80%">
        <img class="mySlides" src="MAIN03.png" style="width:80%">

      </div>
        <br>
    <h3>Track School-wide B-RTI programs in real time.</h3>

    <div class = "maintext">
        <p>Easily collect behavior data on your class and for any student in the building.  Pull reports from the student you are tracking to search for patterns in behavior.</p>
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


        <script>
        var slideIndex = 0;
          carousel();

          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1}
            x[slideIndex-1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
          }
          </script>

      <?php include_once "footer.php"; ?>
    </body>
</html>
