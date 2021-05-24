

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
            <li><a href="routes.php">Routes</a></li>
            
            <li><a href="contact.php">Contact Us</a></li>
<li class="current"><a href="search.php">Search</a></li>
<li><a href="logout.php">Logout</a></li>
    	</ul>
	</div>
    <div id="content">
    <div id="gallerycontainer">
	<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:820px;">	
			<div id="contactleft">
<h1>SEARCH BUS</h1>
<div>	  
<?php 
Include('db.php');
if(isset($_REQUEST['submit8'])!='')
{
if($_REQUEST['startP']=='' || $_REQUEST['desP']=='')
{
echo "please fill the empty field.";
}
else
{
$startP = $_REQUEST['startP'];
$desP = $_REQUEST['desP'];
$type = $_REQUEST['type'];
$q = " select *FROM `businfo` WHERE startP='$startP' and desP='$desP' or type='$type'";
$result=mysqli_query($con,$q)or die(mysqli_error($con));?>
		<table style="width:70%"  border="1">

		<tr><th>Bus ID</th><th>Bus name</th><th>Starting point</th><th>Destination</th><th>Price</th><th>Seats Avalible</th><th>Type of bus</th></tr>

		<?php 
		while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {  ?>
 		<tr>  <td><?php  echo  $row['id_no'] ; ?> </td>
   		<td><?php echo  $row['name'] ; ?></td>
   		<td><?php echo  $row['startP'] ; ?></td>
   		<td><?php echo  $row['desP']  ; ?></td>
   		<td><?php echo  $row['price'] ; ?></td>
		<td> <?php    echo  $row['seat'] ;?> </td>
  		<td><?php echo  $row['type'] ; ?></td></tr>

	<?php }


}
}
		
		        if(array_key_exists('submit5 ', $_POST)) { 
            		submit5(); 
        		} 
			
			function submit5() { 
           
				header("Location: dashboard.php");
        		} 

?>
<form class="login" action="search.php" align="center" class="login">
			 		<tr><select name="startP">  
 			 		<option value="Select">Select</option>}  
			  		<option value="Akola">Akola</option>  
			  		<option value="Nagpur">Nagpur</option>  
			  		<option value="Pune">Pune</option>  
			  		<option value="Nanded">Nanded</option>  
			  		<option value="Mumbai">Mumbai</option>  
			  		<option value="Goa">Goa</option>    
					</select>    </tr>
 					<tr><select name="desP">  
	 			 	<option value="Select">Select</option>}  
			  		<option value="Akola">Akola</option>  
				  	<option value="Nagpur">Nagpur</option>  
				  	<option value="Pune">Pune</option>  
				  	<option value="Nanded">Nanded</option>  
				  	<option value="Mumbai">Mumbai</option>  
				  	<option value="Goa">Goa</option>    
					</select>    </tr>
			<tr><select name="type">  
  			<option value="Select">Select</option>  
  			<option value="ac">AC</option>   
  			<option value="nonac">NON AC</option>    
			</select>   </tr>
    	<!--<tr><td> <input type="text" class=" " name="startP" placeholder="Start" required /> </td>   </tr>
	<tr><input type="text" class=" " name="desP" placeholder="Destination" required /></td>   </tr>-->


   	
<tr> <button type="submit" name="submit8" value="Search" class="login-button">Search</button>  </tr>
</form>		
</div>
</div>
</body>
</html>
