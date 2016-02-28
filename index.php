<?php
	include('config/database.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HFE | Help For Everyone</title>
<link href="css/homepagedesign.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="photo/tablogo.png">
</head>

<body>
<div class="wrapper">
	<div class="nav">
    	<?php 
			include('nav.php');
		?>
    </div>
    <div class="banner">
    	<?php 
			include('banner.php');
		?>   
    </div>
    <div class="aboutus">
    <a name="go"></a>
    	<div class="round">
    		<h3>What We Do?</h3>
   	 	</div>
        <div class="heading1">
        	<h3>KINDNESS IS POWERFUL</h3>
        </div>
         <div class="heading2">
        	<p>We’re the leader in free online fundraising. We focus on compassionate crowdfunding, providing free fundraising and support for humanitarian causes.<p>
        </div>
        <br clear="all">
        <div class="heading3">
        	<h3>$285+ Million</h3>
            <p>RAISED</p>
        </div>
        <div class="heading4">
        	<h3>176,000</h3>
            <p>FUNDRAISERS</p>
        </div>
        <div class="heading5">
        	<h3>3.9 Million</h3>
            <p>SUPPORTERS</p>
        </div>
        <div class="heading6">
        	<h3>$0</h3>
            <p>YOUCARING FEES</p>
        </div>
    </div>
    <div class="section1">
    	<div class="image1"><h3>Trust Us</h3><p>We are the worlds leading fund raising platform millions of people trust us as we help those people we are the victem of natural digaster</p></div>
        <div class="image2"><h3>How We Work</h3><p>We expect fund from you. Fund rised is then send to our volunters around the globe helping those victim. We have well trained volunters around the globe.</p></div>
        <div class="image3"><h3>Why Us?</h3><p>We love what we do. There are many people round globe who are victem of natural digaster. Our volunters use your money on them so that they could make their life easier.</div>
        <h2>Trusted Platform To give a Donation</h2>
    </div>

<div class="whatisthis"><h2>Trending</h2></div>
<br clear="all">
<div class="trending">
     <?php
		$q = "SELECT * FROM event WHERE hit BETWEEN 100 AND 99999999999999999999999999999 ORDER BY hit DESC";
		$res = mysql_query($q);
		for($i=1; $i<=3; $i++)
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
</body>
</html>