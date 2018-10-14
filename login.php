<?php session_start();

require('database/connection.php');
	
	if(!empty($_POST))
	{
		$msg="";
        if(empty($_POST['eid']) && empty($_POST['psw']))
        {
			$msg.="<li style='list-style:none;'>please full fill all requirment";            
        }
        else
        {
		    if(empty($_POST['eid']))
	    	{
		    	$msg.="<li style='list-style:none;'>please enter your registerd email";
		    }
		
		    if(empty($_POST['psw']))
		    {
			    $msg.="<li style='list-style:none;'>Please enter password";
		    }
        }
		if(!empty($msg))
		{
			header("location:index.php?error=".$msg);
		}
		else
		{
			
			
	
			
			$email=$_POST['eid'];
			$query="SELECT *  FROM user WHERE (`email_id` LIKE '%".$email."%')";
			
			
			$result=mysqli_query($conn,$query) or die("wrong query");
			
			$row=mysqli_fetch_assoc($result);
			
			if(!empty($row))
			{
				if($_POST['eid']==$row['email_id'] &&  $_POST['psw']==$row['upassword'])
				{
			
					$_SESSION['id']=$row['email_id'];
					$_SESSION['password']=$row['upassword'];
					$_SESSION['name']=$row['shopkeeper'];
					$_SESSION['sname']=$row['shopname'];
					$_SESSION['spaddress']=$row['shopaddress'];
					$_SESSION['contect']=$row['contect_no'];
					$_SESSION['status']=true;
					
							 $name= $_SESSION['name'];       
					          
							 $dt=date("Y-m-d h:i:sa");
					   $query="INSERT INTO loh(shopkeeper,email_id,date_timex,logx)VALUES('$name','$email','$dt','login')";
					   mysqli_query($conn,$query) or die("wrong query");

						header("location:dashbord.php");
					
				}
				
				else
				{
                    $msg.="<li style='list-style:none;'>Incorrect Password....";
                    header("location:index.php?error=".$msg);
				}
			}
			else
			{
                $msg.="<li style='list-style:none;'>Invalid user....";
                header("location:index.php?error=".$msg);
			}
		}
	
	}
	else
	{
		header("location:index.php");
	}
			
?>