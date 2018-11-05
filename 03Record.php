<!DOCTYPE html>
<html>
    <head>
      <?php include_once "head.php"; ?>
    </head>
    <body>
      <?php
       include_once "navbar.php";
       include_once "header.php";
        ?>
    <div>
      <form>
        First Name of Student:<br>
        <input type="text" name="firstname"><br>
        Last Name of Student:<br>
        <input type="text" name="lastname">
      </form>
      <br>
      <form>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other
      </form>
      <br>
      <form>
        <input type="radio" name="grade" value="6th Grade" checked> 6th Grade<br>
        <input type="radio" name="grade" value="7th Grade"> 7th Grade<br>
        <input type="radio" name="grade" value="8th Grade"> 8th Grade<br>
        <input type="radio" name="grade" value="unknown"> Unknown<br>
      </form>
      <br>
      <form>
        Date of Incident:
        <input type="date" name="date of incident">
      </form>
      <br>
      <form>
        <input type="radio" name="time of day" value="Before School" checked> Before School<br>
        <input type="radio" name="time of day" value="Morning Break"> Morning Break<br>
        <input type="radio" name="time of day" value="Lunch"> Lunch<br>
        <input type="radio" name="time of day" value="Passing Period"> Passing Period<br>
        <input type="radio" name="time of day" value="After School"> After School<br>
        <input type="radio" name="time of day" value="During Class"> During Class<br>
      </form>
      <br>
      <form>
        <input type="radio" name="period" value="Advisory" checked> Advisory<br>
        <input type="radio" name="period" value="1st Period"> 1st Period<br>
        <input type="radio" name="period" value="2nd Period"> 2nd Period<br>
        <input type="radio" name="period" value="3rd Period"> 3rd Period<br>
        <input type="radio" name="period" value="4th Period"> 4th Period<br>
        <input type="radio" name="period" value="5th Period"> 5th Period<br>
        <input type="radio" name="period" value="6th Period"> 6th Period<br>
        <input type="radio" name="period" value="7th Period"> 7th Period<br>
        <input type="radio" name="period" value="8th Period"> 8th Period<br>
      </form>
      <br>

    </div>

    <div class = "photos">
        <br>
        <img src="Graduate.png" alt= "Graduate" width =40% class="center">
        <br>
    </div>

      <?php include_once "footer.php"; ?>

    </body>
</html>
