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
        <img class="mySlides" src="MAIN01.png" style="width:100%">
        <img class="mySlides" src="MAIN02.png" style="width:100%">
        <img class="mySlides" src="MAIN03.png" style="width:100%">

      </div>
        <br>
    <h2>Track School-wide B-RTI programs in real time.</h2>

    <div class = "maintext">
        <p>
          Easily collect behavior data on your class and for any student in the building.
          Pull reports from the student you are tracking to search for patterns in behavior.
          Help build systems for your school by understanding patterns within the classroom
          and around the school grounds.

        </p>
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
            setTimeout(carousel, 3000); // Change image every 2 seconds
          }
          </script>

      <?php include_once "footer.php"; ?>
    </body>
</html>
