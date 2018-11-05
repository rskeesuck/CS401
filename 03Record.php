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
    <div class = "formcontainer">
    <div class = "form">
      <h3>Who was it?  Student Name (First, Last)</h3>
      <br>
      <form action="/action_page.php">
        First Name of Student:<br>
        <input type="text" name="firstname"><br>
        Last Name of Student:<br>
        <input type="text" name="lastname">
      <br>
      <h3>Gender of Student (if known)</h3>
      <br>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other
      <br>
      <h3>Grade of Student (if known)</h3>
      <br>
        <input type="radio" name="grade" value="6th Grade" checked> 6th Grade<br>
        <input type="radio" name="grade" value="7th Grade"> 7th Grade<br>
        <input type="radio" name="grade" value="8th Grade"> 8th Grade<br>
        <input type="radio" name="grade" value="unknown"> Unknown<br>
      <br>
      <h3>What day did this happen?</h3>
      <br>
        Date of Incident:
        <input type="date" name="date of incident">
      <br>
      <h3>What time of day did this happen?</h3>
      <br>
        <input type="radio" name="time of day" value="Before School" checked> Before School<br>
        <input type="radio" name="time of day" value="Morning Break"> Morning Break<br>
        <input type="radio" name="time of day" value="Lunch"> Lunch<br>
        <input type="radio" name="time of day" value="Passing Period"> Passing Period<br>
        <input type="radio" name="time of day" value="After School"> After School<br>
        <input type="radio" name="time of day" value="During Class"> During Class<br>
      <br>
      <h3>If this happened during class, which period?</h3>
      <br>
        <input type="radio" name="period" value="N/A" checked> N/A<br>
        <input type="radio" name="period" value="Advisory"> Advisory<br>
        <input type="radio" name="period" value="1st Period"> 1st Period<br>
        <input type="radio" name="period" value="2nd Period"> 2nd Period<br>
        <input type="radio" name="period" value="3rd Period"> 3rd Period<br>
        <input type="radio" name="period" value="4th Period"> 4th Period<br>
        <input type="radio" name="period" value="5th Period"> 5th Period<br>
        <input type="radio" name="period" value="6th Period"> 6th Period<br>
        <input type="radio" name="period" value="7th Period"> 7th Period<br>
        <input type="radio" name="period" value="8th Period"> 8th Period<br>
      <br>
      <h3>Where did this happen?</h3>
      <br>
        <input type="radio" name="where" value="Classroom" checked> Classroom<br>
        <input type="radio" name="where" value="Cafeteria"> Cafeteria<br>
        <input type="radio" name="where" value="Library (During Open Use)"> Library<br>
        <input type="radio" name="where" value="Main Hallway (in front of Library)"> Main Hallway<br>
        <input type="radio" name="where" value="Mall (Outside)"> Mall<br>
        <input type="radio" name="where" value="Back (Outside)"> Back<br>
        <input type="radio" name="where" value="6th Grade Hallway/Locker Area"> 6th Grade Hall<br>
        <input type="radio" name="where" value="7th Grade Hallway/Locker Area"> 7th Grade Hall<br>
        <input type="radio" name="where" value="8th Grade Hallway/Locker Area"> 8th Grade Hall<br>
        <input type="radio" name="where" value="During Sporting Event/Practice"> Sporting Event/Practice<br>
        <input type="radio" name="where" value="Assembly/Activity"> Assembly/Activity<br>
      <br>
      <h3>BEHAVIOR(s) that primarily affect only the student:</h3>
      <br>
        <input type="checkbox" name="behavior1" value="Not Following Directions"> Not Following Directions<br>
        <input type="checkbox" name="behavior2" value="Not Prepared for Class/Materials"> Not Prepared for Class/Materials<br>
        <input type="checkbox" name="behavior3" value="Off Task"> Off Task<br>
        <input type="checkbox" name="behavior4" value="Dress Code"> Dress Code<br>
        <input type="checkbox" name="behavior5" value="Sleeping"> Sleeping<br>
        <input type="checkbox" name="behavior6" value="Excessive Tardies"> Excessive Tardies<br>
        <input type="checkbox" name="behavior7" value="Asking to Leave the Classroom"> Asking to Leave the Classroom<br>
        <input type="checkbox" name="behavior8" value="Cheating"> Cheating<br>
        <input type="checkbox" name="behavior9" value="Insubordination"> Insubordination<br>
      <br>
      <h3>BEHAVIOR(s) that affect(s) the student AND others:</h3>
      <br>
        <input type="checkbox" name="behavior10" value="Talking During Instruction"> Talking During Instruction<br>
        <input type="checkbox" name="behavior11" value="Blurting Out"> Blurting Out<br>
        <input type="checkbox" name="behavior12" value="Physical Touching"> Physical Touching<br>
        <input type="checkbox" name="behavior13" value="Disrupting the Learning Environment"> Disrupting the Learning Environment<br>
        <input type="checkbox" name="behavior14" value="Inappropriate Language"> Inappropriate Language<br>
        <input type="checkbox" name="behavior15" value="Out of Seat/Wandering"> Out of Seat/Wandering<br>
        <input type="checkbox" name="behavior16" value="Disrespecting Other Students"> Disrespecting Other Students<br>
        <input type="checkbox" name="behavior17" value="Disrespecting the Staff"> Disrespecting the Staff<br>
        <input type="checkbox" name="behavior18" value="Arguing with the Staff"> Arguing with the Staff<br>
        <input type="checkbox" name="behavior19" value="Stealing the Property of Others"> Stealing the Property of Others<br>
        <input type="checkbox" name="behavior20" value="Damaging the Property of Others"> Damaging the Property of Others<br>
        <input type="checkbox" name="behavior21" value="Horseplay/Rough Housing"> Horseplay/Rough Housing<br>
        <input type="checkbox" name="behavior22" value="Fighting"> Fighting<br>
        <input type="checkbox" name="behavior23" value="Bullying"> Bullying<br>
      <br>
      <h3>BEHAVIOR(s) that affect(s) public safety and the common space:</h3>
      <br>
        <input type="checkbox" name="behavior24" value="Running"> Running<br>
        <input type="checkbox" name="behavior25" value="Playing in Unapproved Areas"> Playing in Unapproved Areas<br>
        <input type="checkbox" name="behavior26" value="Littering"> Littering<br>
        <input type="checkbox" name="behavior27" value="Vandalism/Damaging School Property"> Vandalism/Damaging School Property<br>
        <input type="checkbox" name="behavior28" value="Bringing Banned Substance(s) or Proprty"> Banned Substance(s) or Property<br>
    <br>
    <h3>Any other behavior(s) or observations that we need to know about?</h3>
    <br>
        <textarea name="message" rows="10" cols="50">Type your message here...</textarea>
    <br>
      <br>
      <h3>ACTION(s) taken by the staff member to address teh behavior.</h3>
      <br>
        <input type="checkbox" name="action1" value="No Action/Observation"> No Action/Observation<br>
        <input type="checkbox" name="action2" value="Gave Verbal Warning"> Gave Verbal Warning<br>
        <input type="checkbox" name="action3" value="Private Student Conference"> Private Student Conference<br>
        <input type="checkbox" name="action4" value="Emailed Parent/Guardian"> Emailed Parent/Guardian<br>
        <input type="checkbox" name="action5" value="Phoned Parent/Guardian"> Phoned Parent/Guardian<br>
        <input type="checkbox" name="action6" value="Meeting with Parent/Guardian"> Meeting with Parent/Guardian<br>
        <input type="checkbox" name="action7" value="Removed Student from the Activity"> Removed Student from the Activity<br>
        <input type="checkbox" name="action8" value="Sent to Office (ODR)"> Sent to Office (ODR)<br>
        <br>
        <h3>Submit Your Form!</h3>
        <br>
        <input type="submit" value="Submit">
      </form>
        <br>
        <h3>Would You Like to Record a New Incident?</h3>
        <br>
        <a href="03Record.php" class="button">Record New</a>
      </div>

    </div>

      <?php include_once "footer.php"; ?>

    </body>
</html>
