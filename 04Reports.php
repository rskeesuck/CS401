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
				<?php require_once "Dao.php";
					$dao = new Dao();
					$students = $dao->getStudent();

					?>
    <div class = "divcontainer">
			<form action="/02UserHome.php">
				Back to "My Students":<br>
				<br>
				<button type="submit" value="GoToMyStudents" name="MyStudentsButton"> Go Back to My Students</button>
			</form>
			<br>
      <h4>Create an Individual Student Report</h4>

			<table>

    		<?php
      		foreach ($students as $student)
        {
          echo "<tr>
                  <td>
                      First Name: " . htmlentities($student['student_first']) . "<br>
                      Last Name: " . htmlentities($student['student_last']) . "<br>
                      Gender: " . htmlentities($student['gender']) . "<br>
											Grade: " . htmlentities($student['grade']) . "<br>
											<br>
                      <hr>
          				</td>
        			</tr>";
        }
    			?>
  				</table>
      	<br>

    </div>
		<div class="divcontainer">
      <div class = "photo">
          <img src="FakeNews.jpg" alt= "Fake Newspaper" width="100%" class = "center">
					<br>

      </div>
		</div>
      <?php include_once "footer.php"; ?>

    </body>
</html>
