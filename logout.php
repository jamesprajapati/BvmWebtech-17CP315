<?php 
       session_start();

	   if(!isset($_SESSION['status']))
	   { 
		  $msg.="<li style='list-style:none;'> plese login here..";
		  header("location:index.php?error=".$msg);
	   }


     	session_destroy();
						
		header("location:index.php");
	
					
?>

	
	
	
