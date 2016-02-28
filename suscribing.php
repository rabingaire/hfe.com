<?php
	include('config/database.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HFE | Help For Everyone</title>
<link href="css/donatethanks.css" rel="stylesheet" type="text/css"/>
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
    <?php
		if(isset($_GET['err'])&&$_GET['err']=='yes')
		{
	?>
    <div class="detail">
    	<h1>You have already Suscribed with this Email. Thanks </h1>
    </div>
    <?php
    		} elseif(isset($_GET['error'])&&$_GET['error']=='yes') {
    		
    ?>
      <div class="detail">
    	<h1>You have been Unsuscribed. Thank you </h1>
    </div>
    <?php
		}
			else {
				
	?>
    <div class="detail">
    	<h1>Thank you For Suscribing.</h1>
    </div>
    <?php
			}
	?>
</div>
<br clear="all">
<div class="footer">
	<div class="footer1">
    	<?php
			include('footer.php');
		?>
    </div>
</div>