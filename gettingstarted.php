<?php
	include('config/database.php');
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HFE | Help For Everyone</title>
<link href="css/gettingstarted.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="photo/tablogo.png">
</head>

<body>
<div class="wrapper">
	<div class="nav">
    	<?php 
			include('nav.php');
		?>
    </div>
    <div class="banner_g_s">
    <h2>KINDNESS IS POWERFUL</h2>
    </div>
<div class="whatisthis"><h2>Events</h2></div>
<div class="trending">
     <?php
		$q = "SELECT * FROM event";
		$res = mysql_query($q);
		$num = mysql_num_rows($res);
		for($i=1; $i<= $num; $i++)
		{
			$row = mysql_fetch_array($res);
			$datetime1 = strtotime(date("Y-m-d H:i:s"));
			$datetime2 = strtotime($row['nod']);

			$secs = $datetime2 - $datetime1;
			$days = $secs / 86400;
			if($secs > 0)
			{
	?>
    		<?php 
				$eventid = $row['id'];
				$a = "SELECT * FROM donation WHERE event_id = '$eventid'";
				$e = mysql_query($a);
				$n = mysql_num_rows($e);
				$donationrised=0;
				for($j=1;$j<=$n; $j++)
				{
					$o = mysql_fetch_array($e);
					$donationrised = $donationrised + $o['amount'];
				}
			?>
    		<div class="events-lst">
    			<?php
					$qphoto = "SELECT * FROM event_photo WHERE event_id = '$eventid'";
					$photo = mysql_fetch_array(mysql_query($qphoto));
					//var_dump($photo);
					$dispic = $photo['photo_large'];
					$lar_image = 'photo/events/'.$dispic;
				?>
    			<div class="eventp">
                        <img src="<?php echo $lar_image?>"/>	  
                </div>
        		<div class="eventd">
        			<div class="chapter"><?php echo $row['event_name'];?></div>
            			<div class="chapterdetail"><?php echo $row['event_desc'];?></div>
            			<div class="rised">Donation Rised $<?php echo $donationrised;?></div>
            			<a href="donate.php?id=<?php echo $row['id']?>"><input type="button" value="Donate"/></a>
        			<div class="nod">Number of days reamaining <?php echo (int)$days;?></div>
        		</div>
    		</div>
	<?php
				}
			}
	?>
</div>
</div>
<br clear="all">
<div class="footer">
	<div class="footer1">
    	<?php
			include('footer.php');
		?>
    </div>
</div>