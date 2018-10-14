<?php 
       session_start();
        require("database/connection.php");          
	   if(!isset($_SESSION['status']))
	   { 
		  $msg.="<li style='list-style:none;'> plese login here..";
		  header("location:index.php?error=".$msg);
	   }
	   $name= $_SESSION['name'];   
	   $email=$_SESSION['id']; 
	
	   $dt=date("Y-m-d h:i:sa");
 		$query="INSERT INTO loh()VALUES('$name','$email','$dt','logout')";
 		mysqli_query($conn,$query) or die("wrong query");     

     	session_destroy();
						
		header("location:index.php");
	
					
?>

	
	
	
