<?php
	session_start();
	include('config/database.php');
	$to = $_POST['newsletter'];
	$s = "SELECT * FROM  `suscribers`"; 
	$e = mysql_query($s);
	$n = mysql_num_rows($e);
	for($i=1; $i<= $n; $i++)
	{
		$row = mysql_fetch_array($e);
		if($row['email'] == $to)
		{ 
			header("Location: suscribing.php?err=yes");
			exit();
		}
	}
			$q = "INSERT INTO `suscribers` (`id`, `email`) VALUES (NULL, '$to');";
			mysql_query($q);
			$subject = "Thanks";
			$body = "Thanks for subscribing to HFE.\n \n We will let you know when there is an update.Thanks";
			$headers = 'From: HFE <hfe@rabingaire.com.np>';
			mail($to, $subject, $body , $headers);
	header("Location: suscribing.php");
?>