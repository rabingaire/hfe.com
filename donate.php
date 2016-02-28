<?php
	include('config/database.php');
	session_start();
	$id = $_GET['id'];
	$q = "SELECT * FROM event WHERE id = '$id'";
	$res = mysql_query($q);
	$row = mysql_fetch_array($res);
	$newhit = $row['hit']+1;
	$q = "UPDATE event SET hit = '$newhit' WHERE id = '$id'";
	mysql_query($q);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HFE | Help For Everyone</title>
<link href="css/donate.css" rel="stylesheet" type="text/css"/>
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
    <div style="color:#F00; margin-left:460px;">Account Number Does not match!</div>
    <?php
		}
	?>
     <?php
		if(isset($_GET['err_1'])&&$_GET['err_1']=='yes')
		{
	?>
    <div style="color:#F00; margin-left:460px;">Please Fill Up The Empty Spaces!</div>
    <?php
		}
	?>
    
      <?php
		if(isset($_GET['err_2'])&&$_GET['err_2']=='yes')
		{
	?>
    <div style="color:#F00; margin-left:460px;">Amount Should Be in Number!</div>
    <?php
		}
	?>
    <div class="donationforum">
    <h2>Donate on event <?php echo $row['event_name'];?> </h2>
    	<form action="donationaction.php" method="post" name="donation" id="donation">
        	<input type="hidden" name="id" id="id" value="<?php echo $id;?>"/>
        	<input type="text" name="fullname" id="fullname" class="fullname" placeholder="Enter your Fullname"/><br>
            <select name="dropdown" id="dropdown" class="dropdown" >
          <option selected="selected" >Paypal</option>
          <option>Visa</option>
          <option>Master Card</option>
          </select><br>
        <input maxlength="5" class="amount" type="text" name="amount" id="amount" placeholder="Enter Amount"/><br>
        <input class="accountnumber" type="text" name="accountnumber" id="accountnumber" placeholder="Enter Account Number"/><br>
        <input class="conaccountnumber" name="conaccountnumber" id="conaccountnumber" type="text" placeholder="Conform Account Number"/><br>
        <input class="submit" type="submit"  name="submit" id="submit" value="Help"/>
        </form>
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