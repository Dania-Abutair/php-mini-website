<?php
session_start();
$key=$_GET['key'];

unset($_SESSION['multi'][$key]);
header("Location: admin.php");
?>