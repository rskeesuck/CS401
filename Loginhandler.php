<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
  //$firstname = $_POST['firstname'];
  //$lastname = $_POST['lastname'];

	$messages = array();
	$bad = false;

	$_SESSION['presets']['username'] = $username;
	if(empty($username)){
		$_SESSION['messages'][] = "Username is Required";
		$bad = true;
	}
	if(empty($password)){
		$_SESSION['messages'][] = "Password is Required";
		$bad = true;
	}
  //if(empty($firstname)){
	//	$_SESSION['messages'][] = "First Name is Required";
//		$bad = true;
//	}
//  if(empty($lastname)){
//    $_SESSION['messages'][] = "Last Name is Required";
//    $bad = true;
//  }

	if (!preg_match('~[1-9]~', $password)||!preg_match('~[A-Z]~', $password)) {
		$_SESSION['messages'][] = "Password must have at least one number and one uppercase letter.";
		$bad=true;
	}
	if($bad){
		header('Location: 01LogonPage.php');
		exit;
	}
	require_once 'Dao.php';
	$dao = new DAO();

	if(isset($_POST['CreateButton'])){
		$user=$dao->getUsername($username);
		if(empty($user)){
			$dao->addUser($username, $password);
			$_SESSION['logged_in']=true;
			header('Location: 02UserHome.php');
			exit;
		}else{
			$_SESSION['messages'][]="That username already exists";
			$_SESSION['logged_in']=false;
			header('Location: 01NewLogon.php');
			exit;
		}
	}else if (isset($_POST['LoginButton'])){
		$login=$dao->getUserPassword($username, $password);
		if($login){
			$_SESSION['logged_in']=true;
			header('Location: 02UserHome.php');
			exit;
		}else{
			$_SESSION['messages'][]="Username or Password is incorrect.";
			$_SESSION['logged_in']=false;
			header('Location: 01LogonPage.php');
			exit;
		}
	}
	//All is good
	unset($_SESSION['presets']);
	exit;
?>
