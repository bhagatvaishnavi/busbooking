<!DOCTYPE html> 
<html> <link rel="stylesheet" href="style.css" />

<?php
include ('db.php');
$query="SELECT *FROM cusinfo ORDER BY cus_id  ";
$result=mysqli_query($con,$query)or die(mysqli_error($con)); ?>
<table style="width:70%"  border="1">

<tr><th>Customer ID</th><th>Customer Name</th><th>Starting point</th><th>Destination</th><th>Number of person</th><th>Type of bus</th>
<?php while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {?>

<tr>  
<td> <?php  echo  $row['cus_id'] . "<br/>"; ?></td>
     <td> <?php  echo  $row['cname'] . "<br/>"; ?></td>
   <td> <?php echo  $row['startP'] . "<br/>"; ?></td>
   <td> <?php echo  $row['desP'] . "<br/>";  ?></td>
   <td> <?php echo  $row['no'] . "<br/>"; ?></td>
   <td> <?php echo  $row['type'] . "<br/>"; ?></td>
   </tr>
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