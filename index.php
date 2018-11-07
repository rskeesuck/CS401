<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
  header('Location: 01LogonPage.php');
  exit;
}

include_once("00MainPage.php");

?>
