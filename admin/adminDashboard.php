<!DOCTYPE html> 
<html> 
    <link rel="stylesheet" href="style.css" />  
	<head> <title>  Admin Area   </title></head> 
  	<body style="text-align:center;"> 
      	<h1 style="color:green;"> Admin Area</h1> 
      		<?php
        		if(array_key_exists('submit1', $_POST)) { 
            		submit1(); 
        		} 
			else if(array_key_exists('submit2 ', $_POST)) { 
            		submit2(); 
        		} 
			else if(array_key_exists('submit3 ', $_POST)) { 
            		submit3(); 
        		} 
			else if(array_key_exists('submit4 ', $_POST)) { 
            		submit4(); 
        		} 
			else if(array_key_exists('submit5 ', $_POST)) { 
            		submit5(); 
        		} 
			function submit5() { 
           
				header("Location: displaybooking.php");
        		} 
			function submit4() { 
           
				header("Location: displaybus.php");
        		} 
			function submit2() { 
           
				header("Location: updatebus.php");
        		} 
			function submit3() { 
           
				header("Location: deletebus.php");
        		} 
        		function submit1() { 
            
            			header("Location: addbus.php");
        		} 
        
    		?> 
<table class="login">
	  <!--<form action="addbus.php" method="post">
    	<h1 class="login-title">Edit buses</h1>
  		<tr><td> <input type="text" class=" " name="id_no" placeholder="Number" required /> </td>   </tr>
		<tr><td><input type="text" class=" " name="name" placeholder="Name" required /></td>   </tr>
    		<tr><td><input type="text" class="" name="startP" placeholder="Start Point"></td>   </tr>
 		<tr><td><input type="text" class="" name="desP" placeholder="End Point"></td>   </tr>
		<tr><td><input type="text" class="" name="price" placeholder="Price"></td>   </tr>
 		<tr><td><input type="text" class="" name="btime" placeholder="Time"></td>   </tr>
    		<tr><td><input type="submit" name="submit1" value="Add" class="button"></td>   </tr>
		</p>
	</form> -->
		<form action="addbus.php" method="post">
    		<h1 class="login-title">Edit buses</h1>
    		<tr><td><input type="submit" name="submit1" value="Add bus" class="button"></td>   </tr>
		</p>
	</form> 
 
	<!--<form action="updatebus.php" method="post">
    
               	<tr><td> <input type="text" class=" " name="id_no" placeholder="Number" required /> </td>   </tr>
		<tr><td><input type="text" class=" " name="name" placeholder="Name" required /></td>   </tr>
    		<tr><td><input type="text" class="" name="startP" placeholder="Start Point"></td>   </tr>
 		<tr><td><input type="text" class="" name="desP" placeholder="End Point"></td>   </tr>
 		<tr><td><input type="text" class="" name="price" placeholder="Price"></td>   </tr>
		<tr><td><input type="text" class="" name="btime" placeholder="Time"></td>   </tr>
    		<tr><td><input type="submit" name="submit2" value="update" class="button"></td>   </tr> </p>
 	</form> -->
		<form action="updatebus.php" method="post">
         	<tr><td><input type="submit" name="submit2" value="Update bus" class="button"></td>   </tr>
		</p>
	       </form>

	        <form action="deletebus.php" method="post">
		<tr><td><input type="submit" name="submit3" value="Delete bus" class="button"></td>   </tr>
		</p>
    	</form> 
<form action="displaybus.php" method="post">
		<tr><td><input type="submit" name="submit4" value="Display bus" class="button"></td>   </tr>
		</p>
    	</form> 
</form> 
<form action="displaybooking.php" method="post">
		<tr><td><input type="submit" name="submit5" value="Display booking" class="button"></td>   </tr>
    	</form> 
</table>

  
</html>