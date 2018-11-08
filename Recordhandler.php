<?php
	session_start();
	require_once 'Dao.php';

	$student_first = $_POST['firstname'];
	$student_last = $_POST['lastname'];
  $student_gender = $_POST['gender'];
  $student_grade = $_POST['grade'];

	$messages = array();
  $_SESSION['presets']=array($_POST);

	$bad = false;

	$dao = new Dao();
  //echo "check";
  echo ($student_first . " " . $student_last);

  if(isset($_POST['Submit'])){

    if(empty($student_first)){
      $_SESSION['messages'] = "Student first name is required.";
      $bad = true;
    }
    if(empty($student_last)){
      $_SESSION['messages'] = "Student last name is required.";
      $bad = true;
    }

    if($bad){
      $_SESSION['validated'] = 'bad';
      header('Location: 03Record.php');
      exit;
    }
  }

  ?>
