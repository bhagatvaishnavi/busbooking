<!DOCTYPE html> 
<html> <link rel="stylesheet" href="style.css" />

<?php
include ('db.php');
$query="SELECT *FROM businfo ORDER BY id_no ASC";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
 ?>

<table style="width:70%"  border="1">
<tr><th>Bus ID</th><th>Bus name</th><th>Starting point</th><th>Destination</th><th>Price</th><th>Seats Available</th><th>Type of bus</th>

<?php
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) { ?>
  <tr>
 <th> <?php   echo  $row['id_no'] ; ?> </th>
<th> <?php    echo  $row['name'] ; ?> </th>
<th> <?php    echo  $row['startP'] ;?> </th>
<th> <?php    echo  $row['desP'] ;?> </th>
<th> <?php    echo  $row['price'] ;?> </th>
<th> <?php    echo  $row['seat'] ;?> </th>
<th> <?php    echo  $row['type'] ;?> </th>

<?php
}
 
// close the db connection
mysqli_close($con);

		        if(array_key_exists('submit5 ', $_POST)) { 
            		submit5(); 
        		} 
			
			function submit5() { 
           
				header("Location: adminDashboard.php");
        		} 

?>
<table class="login">
<div id="footer">


<form action="adminDashboard.php" method="post">
   	<tr><td><input type="submit" name="submit5" value="Back" class="button"></td>   </tr>
		
	<tr><td><input type="button" value="Print" onClick="window.print()" class="button"></td>   </tr>
</form>

</div>
</table>

</html>