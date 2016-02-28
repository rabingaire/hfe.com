<?php
	session_start();
	include('config/database.php');
	$id = $_POST['id'];
	$fullname = $_POST['fullname'];
	$dropdown = $_POST['dropdown'];
	$amount = $_POST['amount'];
	$accountnumber = $_POST['accountnumber'];
	$conaccountnumber = $_POST['conaccountnumber'];
	$udate = date("Y-m-d H:i:s");
	if(empty($fullname) || empty($amount) || empty($accountnumber) || empty($conaccountnumber))
	{
			header("Location: donate.php?err_1=yes&id=$id");
			exit();
	}
	if($accountnumber != $conaccountnumber)
	{
			header("Location: donate.php?err=yes&id=$id");
			exit();
	}
	if(!is_numeric ($amount))
	{
			header("Location: donate.php?err_2=yes&id=$id");
			exit();	
	}
	$r = "SELECT * FROM event WHERE id = '$id'";
	$res = mysql_query($r);
	$row = mysql_fetch_array($res);
	$eventname = $row['event_name'];
	$eventdisc = $row['event_desc'];
	$udate = date("Y-m-d H:i:s");
	$donatedtoevent = $row['id'];
	$q = "INSERT INTO `donation` (`id`, `fullname`, `type`, `accountnumber`, `amount`,`event_id`, `date`) VALUES (NULL, '$fullname', '$dropdown', '$accountnumber', '$amount','$donatedtoevent', '$udate');";
	 mysql_query($q);
	 header("Location: donate_thanks.php");
?>