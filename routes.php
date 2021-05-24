

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to James Buchanan Pub and Restaurant</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />

</head>
<body>
<div id="wrapper">
	<div id="header">
        <ul id="mainnav">
			<li><a href="dashboard.php">Home</a></li>
            
            <li><a href="history.php">Booking</a></li>
            <li class="current"><a href="routes.php">Routes</a></li>
            
            <li><a href="contact.php">Contact Us</a></li>
<li ><a href="search.php">Search</a></li>
<li><a href="logout.php">Logout</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">

			<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:820px;">	
				<div id="contactleft">
<h1>BUS ROUTE</h1>
<div>	  
		<?php Include('db.php');	 		
    	        $query="SELECT *FROM businfo";
		$result=mysqli_query($con,$query)or die(mysqli_error($con));

		?>

		<table style="width:70%"  border="1">

		<tr><th>Bus ID</th><th>Bus name</th><th>Starting point</th><th>Destination</th><th>Price</th><th>Seats Avalible</th><th>Type of bus</th><th>Date</th>

		<?php 
		while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {  ?>
 		<tr>  <th><?php  echo  $row['id_no'] ; ?> </th>
   		<th><?php echo  $row['name'] ; ?></th>
   		<th><?php echo  $row['startP'] ; ?></th>
   		<th><?php echo  $row['desP']  ; ?></th>
   		<th><?php echo  $row['price'] ; ?></th>
		<th> <?php    echo  $row['seat'] ;?> </th>
  		<th><?php echo  $row['type'] ; ?></th>
		
		<th><?php echo  $row['bdate'] ; ?></th></tr>
	<?php }?>
</form>		
</div>


</div>
</body>
</html>
