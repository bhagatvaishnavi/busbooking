<!DOCTYPE html> 
<html> 
    <link rel="stylesheet" href="style.css" />  
<table class="login">
<form action="deletebus.php" method="post">
		<tr><td>Enter Id</td><td> <input type="text" class=" " name="id_no1" placeholder="Number" required /> </td>   </tr>
		<tr><td></td><td><input type="submit" name="submit6" value="delete" class="button"></td>   </tr>
		</p>
    	</form> 
<form action="adminDashboard.php" method="post">
   	<tr><td></td><td><input type="submit" name="submit5" value="Back" class="button"></td>   </tr>
		</p>
	</form>
</table>
<?php
include ('db.php');
if(isset($_REQUEST['submit6'])!='')
{
if($_REQUEST['id_no1']=='')
{
echo "please fill the empty field.";
}
else
{
$id_no1 = $_REQUEST['id_no1'];
$q = " DELETE FROM `businfo` WHERE id_no = $id_no1 ";
$result=mysqli_query($con, $q);
 if($result){
            echo "You are deletion successful.";
        }
else
{
echo "There is some problem in deleting record";
}
}
}
 if(array_key_exists('submit5 ', $_POST)) { 
            		submit5(); 
        		} 
			
			function submit5() { 
           
				header("Location: adminDashboard.php");
        		} 
?>