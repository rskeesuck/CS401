<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$_SESSION['presets']['username'] = $username;

$messages = array();
$bad = false;

$_SESSION['presets']['username']=$username;
if (strlen($username) == 0) {
  $_SESSION['messages'][] = "Username is required.";
  $bad = true;
}
if (strlen($password) == 0) {
  $_SESSION['messages'][] = "Password is required.";
  $bad = true;
}
// Got here, means everything validated, and the comment will post.
unset($_SESSION['presets']);
require_once("Dao.php");

$dao = new Dao();

if (isset($_POST['NewAccount'])) {
  $user=$dao->getUsername($username);
		//if the number of rows in my table with that username are zero, then create a row for the username and password.
		if(empty($user)){
			$dao->addUser($username, $password);
      echo "here";
			header('Location: 01NewLogon.php');
			exit;
		}else{
			$_SESSION['messages'][]= "That username already exists";
      $bad = true;
			//header('Location: index.php');
			//exit;
		}

} else if (isset($_POST['LoginButton'])) {
  $login=$dao->getUserPassword($username, $password);
		if(!empty($login)){
			header('Location: Home.php');
			exit;
		}else{
      $_SESSION['messages'][] = "Username or Password is incorrect.";
			header('Location: index.php');
			exit;

  exit;
}
}
if ($bad) {
  header( 'Location: index.php');
  //$_SESSION['validated'] = 'bad';
  exit;
}
//header('Location: ../index.php');
exit;
?>
