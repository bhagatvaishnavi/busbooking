<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="style.css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to Bus Booking</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>
<?php
Include('db.php');

if(isset($_REQUEST['submit7'])!='')
{
		$id_no  =$_REQUEST['id_no']; 
		$no = $_REQUEST['no'];
		$bdate = $_REQUEST['bdate'];
		$q="SELECT *FROM businfo where id_no='$id_no' and DATE(bdate)='$bdate' ";
		$r=mysqli_query($con,$q)or die(mysqli_error($con));
		while ($row = mysqli_fetch_array($r, MYSQLI_BOTH)) {  
 		$seat=$row['seat'] ;
		}

	if($_REQUEST['cname']=='' || $_REQUEST['startP']==''|| $_REQUEST['desP']==''||$_REQUEST['type']=='')
	{
		echo "please fill the empty field.";
	}
	else if($seat>$no)
	{
		
		$cname  =$_REQUEST['cname']; 
		$id_no  =$_REQUEST['id_no']; 
		$startP = $_REQUEST['startP'];
		$desP = $_REQUEST['desP'];
		$no = $_REQUEST['no'];
		$mob_no = $_REQUEST['mob_no'];
		$type = $_REQUEST['type'];
		$bdate = $_REQUEST['bdate'];
		$payment = $_REQUEST['radio'];
        	$query = "INSERT into `cusinfo` ( id_no,cname, startP, desP,no,mob_no,type,bdate,payment)VALUES ('$id_no','$cname', '$startP', '$desP','$no','$mob_no','$type','$bdate','$payment')";
        	$result = mysqli_query($con,$query);
        	if($result){
            		echo '<script type="text/javascript">';
			echo ' alert("Booking is successful")';  
			echo '</script>';
		$q = "update businfo set seat=(seat-'$no') where startP='$startP' and desP='$desP' and type='$type' and DATE(bdate)='$bdate' ";
		$r = mysqli_query($con,$q);
        	}
		else
		{
			echo '<script type="text/javascript">';
			echo ' alert("There is some problem in booking bus")';  
			echo '</script>';
		}
	}
		else
		{
			echo '<script type="text/javascript">';
			echo ' alert("Booking are not available! ")';  
			echo '</script>';
		}
       
}
	
?>
<body>
<div id="wrapper">
	<div id="header">
    
        <ul id="mainnav">
			<li><a href="dashboard.php">Home</a></li>
            <li class="current"><a href="history.php">Booking</a></li>
            <li><a href="routes.php">Routes</a></li>
            <li><a href="contact.php">Contact Us</a></li>
<li><a href="search.php">Search</a></li>
<li><a href="logout.php">Logout</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<table class="login">
	<form action="history.php" method="post" align="center" >
    		<tr><td>Enter Bus Id </td><td><input type="text" class=" " name="id_no" placeholder="Number" required /> </td>   </tr>
		<tr><td> Date </td><td><input type="date" class=" " name="bdate" placeholder="Date" required /></td>   </tr>
  		<tr><td>Enter name </td><td><input type="text" class=" " name="cname" placeholder="Name" required /> </td>   </tr>
		<tr><td>Number of person </td><td><input type="text" class=" " name="no" placeholder="Number of people" required /> </td>   </tr>
		<tr><td> Mobile number </td><td><input type="text" class=" " name="mob_no" placeholder="Mobile no" required /></td>   </tr>
    		<tr><td>Starting point </td><td><select name="startP">  
  <option value="Select">Select</option>}  
  <option value="Akola">Akola</option>  
  <option value="Nagpur">Nagpur</option>  
  <option value="Pune">Pune</option>  
  <option value="Nanded">Nanded</option>  
  <option value="Mumbai">Mumbai</option>  
  <option value="Goa">Goa</option>    
</select>  </td>   </tr>
 		<tr><td>Destination</td><td><select name="desP">  
  <option value="Select">Select</option>}  
  <option value="Akola">Akola</option>  
  <option value="Nagpur">Nagpur</option>  
  <option value="Pune">Pune</option>  
  <option value="Nanded">Nanded</option>  
  <option value="Mumbai">Mumbai</option>  
  <option value="Goa">Goa</option>    
</select>  </td>   </tr>
<tr><td>Enter bus type</td><td><select name="type">  
  			<option value="Select">Select</option>}  
  			<option value="ac">AC</option>   
  			<option value="nonac">NON AC</option> 

		</select>  </td>   </tr>
<tr><td>Payment</td></tr>
<tr><label><td><input type="radio" name="radio" value="On line"> Online  </td></label></tr><tr><label><td><input type="radio" name="radio" value="Off line">Off line</td>   <label></tr>
    		<tr><td><input type="submit" name="submit7" value="Confim" class="button"></td>   </tr>
		</p>
	</form>
	
</table>
    </div>
</div>
</body>
</html>
