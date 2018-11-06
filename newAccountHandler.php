<?php
session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($login == 'conrad' && $password == 'abc123') {
    $_SESSION['logged_in'] = true;
    header('Location: /00MainPage.php');
    exit;
  }

  $_SESSION['logged_in'] = false;
  $_SESSION['message'] = "Username or password invalid";

  header('Location: /00MainPage.php');

  exit;
?>
