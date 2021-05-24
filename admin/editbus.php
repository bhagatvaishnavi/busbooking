
<!DOCTYPE html> 
<html>      
<head> 
    <title> 
     Edit Bus
    </title> 
</head> 
  
<body style="text-align:center;"> 
      
    <h1 style="color:green;"> 
        Admin Area
    </h1>  
    <?php
        if(array_key_exists('button3', $_POST)) { 
            button3(); 
        } 
        else if(array_key_exists('button4 ', $_POST)) { 
            button4(); 
        } 
        function button3() { 
             
            header("Location: update.php");
        } 
        function button4() { 
           
		header("Location: delete.php");
        } 
    ?> 
<!--  <table style="text-align:center;">
    <form method="post"> 
       <tr> <th><input type="submit" name="button3"
                class="button" value="Update" /> </th></tr>
          
      <tr> <th>  <input type="submit" name="button4"
                class="button" value="Delete" /> </th></tr>
    </form> 
</table>-->
</head> 
  
</html>