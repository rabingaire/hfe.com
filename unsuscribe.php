<?php
	session_start();
	include('config/database.php');
	$number = $_GET['id'];
	$z ="DELETE FROM `suscribers` WHERE id = '$number'";
	mysql_query($z);
	header("Location: suscribing.php?error=yes");
?>