<?php session_start();

if(!isset($_SESSION['status']))
{ 
   $msg.="<li style='list-style:none;'> plese login here..";
   header("location:index.php?error=".$msg);
}

	  require("database/connection.php");

  	if(!empty($_POST))
	{
	       $msg="";
		if(empty($_POST['pname']) && empty($_POST['cname']) && empty($_POST['item']) && empty($_POST['pcode']) && empty($_POST['prise']) && empty($_POST['pquantity']))
		{
			$msg="<li style='list-style: none;'>plese full fill all requirment";
		}
		else
		{  
			if(empty($_POST['pname']))
			{
				$msg.="<li style='list-style: none;'>plese enter product name ";
			}    
			if(empty($_POST['cname']))
			{
				$msg.="<li style='list-style: none;'>plese enter company name ";
			}   
			if(empty($_POST['pcode']))
			{
				$msg.="<li style='list-style: none;'>plese enter product code";
			}   
			if(empty($_POST['item']))
			{
				$msg.="<li style='list-style: none;'>plese select item type ";
			}
			if(empty($_POST['pquantity']))
			{
				$msg.="<li style='list-style: none;'>plese enter product quantity ";
			}
		    if(empty($_POST['prise']))
			{
				$msg.="<li style='list-style: none;'>plese enter product prise ";
			}	    
			if( is_string ($_POST['prise']))
			{
				$msg.="<li style='list-style: none;'>prise is  in number formate";
			}
			if( is_string ($_POST['pquantity']))
			{
				$msg.="<li style='list-style: none;'>quantity is  in number formate ";
			}
		}
		if(is_numeric($_POST['pname']))
		{
			$msg.="<li style='list-style: none;'>ProductName must be in String Format...";
		}
		if(is_numeric($_POST['cname']))
		{
			$msg.="<li style='list-style: none;'>company name must be in  string formate";
		}
	
		
		if($msg!="")
		{
			
			header("location:addstock.php?error=".$msg);
		}
	    else{
		$bcode=$_POST['pcode'];
		$pname=$_POST['pname'];
		$cname=$_POST['cname'];
		$itype=$_POST['item'];
		$quantity=$_POST['pquantity']; 
		$pprise=$_POST['prise'];
		$query="SELECT * FROM stock WHERE (`barcode` LIKE '%".$bcode."%')";
		$result = mysqli_query($conn,$query) or die(mysql_error());
		while($row=mysqli_fetch_assoc($result))
		{
    	 $value=$row['barcode'];

		}
		if($value==$bcode)
		{   $msg="<li style='list-style: none;'>plese enter unique product code";
			header("location:addstock.php?error=".$msg); 
		}else{
	   $query2= "INSERT INTO stock (barcode, productname, companyname, itemtype, productquantity, productprise) VALUES('$bcode', '$pname', '$cname', '$itype', '$quantity', '$pprise')";
	   mysqli_query($conn,$query2) or die("Can't Execute Query...");
	   header("location:addstock.php?ok=1");
		}	
	}			 
 }
?>
