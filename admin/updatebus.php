<!DOCTYPE html> 
<html> 
    <link rel="stylesheet" href="style.css" />  
<table class="login">
<form action="updatebus.php" method="post">
    	<h1 class="login-title">Edit buses</h1>
  		<tr><td>Enter id</td><td> <input type="text" class=" " name="id_no" placeholder="Number" required /> </td>   </tr>
		<tr><td>Enter name</td><td><input type="text" class=" " name="name" placeholder="Name" required /></td>   </tr>
		<tr><td> Date </td><td><input type="date" class=" " name="bdate" placeholder="Date" required /></td>   </tr>
    		<tr><td>Start point</td><td><select name="startP">  
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
 		
		<tr><td>Enter Price</td><td><input type="text" class="" name="price" placeholder="Price"></td>   </tr>
 		<tr><td>Enter Time</td><td><input type="text" class="" name="btime" placeholder="Time"></td>   </tr>
		<tr><td>Select type</td><td><select name="type">  
  			<option value="Select">Select</option>}  
  			<option value="ac">AC</option>   
  			<option value="nonac">NON AC</option>    
		</select>  </td>   </tr>
    		<tr><td></td><td><input type="submit" name="submit2" value="Update" class="button"></td>   </tr>
		</p>
	</form> 
</form>
	<form action="adminDashboard.php" method="post" >
   	<tr><td></td><td><input type="submit" name="submit5" value="Back" class="button"></td>   </tr>
		</p>
	</form>
</table>
<?php
Include('db.php');
if(isset($_REQUEST['submit2'])!='')
{
if($_REQUEST['id_no']=='' || $_REQUEST['name']=='' || $_REQUEST['startP']==''|| $_REQUEST['desP']==''|| $_REQUEST['price']==''||$_REQUEST['type']=='')
{
echo "please fill the empty field.";
}
else
{
	$id_no = $_REQUEST['id_no'];
	$name  =$_REQUEST['name']; 
	$bdate  =$_REQUEST['bdate']; 
	$startP = $_REQUEST['startP'];
	$desP = $_REQUEST['desP'];
	$price = $_REQUEST['price'];
       $type = $_REQUEST['type'];
        $query = "UPDATE `businfo` SET id_no='$id_no', name='$name', startP='$startP', desP='$desP',price='$price', type='$type',bdate='$bdate' WHERE id_no='$id_no' ";
        $result = mysqli_query($con,$query);
        if($result){
            echo "You are Updation successful.";
        }
else
{
echo "There is some problem in updating record";
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
</html>

