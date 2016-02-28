<a href="index.php"class="logo">      
</a>
        
<div class="navpannel">
	<div class="navcontent">
        		<ul>
            		<li><a href="index.php">Home</a></li>
                	<li><a href="#go">About Us</a></li>
                	<li><a href="contact.php">Contact</a></li>
            	</ul>
	</div>
    
    <div class="search">
    <form action="search.php" method="post" name="search" id="search" >
    	<?php
			if(isset($_POST['word']))
			{
		?>
            	<input type="text" name="word" id="word" placeholder="Search" value="<?php echo $search;?>"/>
        <?php
			}
			else {
		?>
        		<input type="text" name="word" id="word" placeholder="Search"/>
        <?php
			}
		?>
    </form>
    </div>
</div>
<br clear="all"/>