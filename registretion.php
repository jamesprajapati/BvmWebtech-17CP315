<?php

	require("database/connection.php");
	$temp="$%^&*";
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['fullname']) && empty($_POST['shopname']) && empty($_POST['spaddress']) && empty($_POST['eid']) && empty($_POST['pwd']) && empty($_POST['cpwd']) && empty($_POST['mobileno']))
		{
			$msg.="<li style='list-style:none;'>Please full fill all requirement";
		}
		else
		{
			if(empty($_POST['fullname']))
			{
				$msg.="<li style='list-style:none;'> please enter your Full name";
			}
			if(empty($_POST['shopname']))
			{
				$msg.="<li style='list-style:none;'> please enter your shopname";
			}
			
			if(empty($_POST['spaddress']))
			{
				$msg.="<li style='list-style:none;'> please enter your shop address";
			}
			
			if(empty($_POST['eid']))
			{
				$msg.="<li style='list-style:none;'> please enter your email address to be regiser....";
			}
			
			if(empty($_POST['pwd']))
			{
				$msg.="<li style='list-style:none;'> password should not be empty....";
			}
			
			if(empty($_POST['cpwd']))
			{
				$msg.="<li style='list-style:none;'> please confirem your password";
			}
		}
		
		if($_POST['pwd']!=$_POST['cpwd'])
		{
		   	$msg.="<li style='list-style:none;'> your password is not match with confirm password.....";
		}
		
		function valid_email($str) {
			return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
		}
		$email=$_POST['eid'];        	
       	 
		if(!valid_email($email)){
			$msg.="<li style='list-style:none;'>plese enter a valid email address";
		}
		
		if(strlen($_POST['pwd'])>20)
		{
			$msg.="<li style='list-style:none;'>Please Enter Your Password in limited Format....";
		}
		
		if(is_numeric($_POST['fullname']))
		{
			$msg.="<li style='list-style:none;'>Name must be in String Format...";
		}
		if(array_key_exists('mobileno', $_POST))
 			 { 
   		 if(!preg_match("/^[1-9]{1}[0-9]{9}$/", $_POST['mobileno']))
    		{   $msg.= "<li style='list-style:none;'>".$_POST['mobileno']; 
      			$msg.= "<li style='list-style:none;'>Invalid Number!";
    		}
  			}
		if($msg!="")
		{
			header("location:signup.php?error=".$msg);
		}
		else
		{
			$name=$_POST['fullname'];
			$spname=$_POST['shopname'];
			$spaddres=$_POST['spaddress'];
			$email=$_POST['eid'];
			$pwd=$_POST['pwd'];
			$contact=$_POST['mobileno'];
      
			   
			$query="SELECT email_id  FROM user WHERE (`email_id` LIKE '%".$email."%')";
			$result =mysqli_query($conn,$query) or die("Can't Execute Query...");
			while($row=mysqli_fetch_assoc($result))
			{
                 $temp=$row['email_id'];
			}
			if($temp==$email)
			{   
				$msg.= "<li style='list-style:none;'> you are allredy registerd  with this".$email."email id";
				header("location:signup.php?error=".$msg);	
			}else
			{
			  $query=	"INSERT INTO user (`shopkeeper`, `shopname`, `shopaddress`, `email_id`, `upassword`, `contect_no`) 
			     VALUES('$name','$spname','$spaddres','$email','$pwd','$contact')";
			
			    

			mysqli_query($conn,$query) or die("Can't Execute Query...");
			
			header("location:signup.php?ok=".$name);
			}
		}
	}	
?>