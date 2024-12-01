<?php session_start();

unset($_SESSION['myfile']);
session_destroy();
header("location:index.php");
?>