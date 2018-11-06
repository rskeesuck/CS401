<?php
session_start();
session_destroy();
header('/00MainPage.php');
?>
