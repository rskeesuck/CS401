<!DOCTYPE html>
<?php session_start(); ?>
<?php $thisPage = "06Help"; ?>
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

    <div class="divcontainer">
      <div>
        <h2>Need Help?  Well, here ya go...</h2>
      </div>

      <div class = "photo">
          <img src="FirstAid.jpg" alt= "First Aid Box" width="100%" class = "center">
      </div>

      <div>
        <h2>FAQ's and the like.</h2>
        <br>
      </div>

      <div class = "maintext">
        <h3>How much time will this take?</h3>
        <br>
        <p>Running the program won't take much time at all!  Most entries can be done in under a minute.</p>
        <br>
        <h3>What about tracking students?</h3>
        <br>
        <p>Yes.  You'll be able to track the "most popular" students along with making new entries for newcommers.</p>
        <br>
        <h3>Can I get reports on a student?</h3>
        <br>
        <p>Of course!  You can run an individual student report to help narrow down behaviors over time.</p>
        <br>
        <h3>If I were a hot dog, would you eat me?</h3>
        <br>
        <p>I would.  I love hot dogs.</p>
        <br>
      </div>
    </div>
      <?php include_once "footer.php"; ?>

    </body>
</html>
