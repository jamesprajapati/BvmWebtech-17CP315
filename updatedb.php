<?php  session_start();

		 if(!isset($_SESSION['status']))
		 { 
			$msg.="<li style='list-style:none;'> plese login here..";
			header("location:index.php?error=".$msg);
		 }

    require("database/connection.php");
   if(!empty($_POST))
     {  $msg="";
        if(empty($_POST['pcode']) && empty($_POST['prise']) && empty($_POST['quantity']))
        {
            $msg.="<li style='list-style: none;'> plese full fill all requirment";
        }
        else
        {
            if(empty($_POST['pcode']))
            {
                $msg.="<li style='list-style: none;'> product code is mendetory without this we cant update stock.";
            }
            if( empty($_POST['prise']) && empty($_POST['quantity']))
            {
                $msg.="plese enter prise or quantity to update you can also enter one both of them";
            }
        }
        if($msg!="")
		{
			
            header("location:addstock.php?error2=".$msg);
            
        }
        else
        {
            $bcode=$_POST['pcode'];
            $pquantity=$_POST['quantity']; 
		    $pprise=$_POST['prise'];
             
            $query="SELECT barcode,productquantity  FROM stock WHERE (`barcode` LIKE '%".$bcode."%')";
            $result = mysqli_query($conn,$query) or die(mysql_error());
            while($row=mysqli_fetch_assoc($result))
            {
             $code=$row['barcode'];
             $oldquantity=$row['productquantity'];
             
            }
             $newq=$oldquantity+$pquantity;
            if($code==$bcode)
            {   
                if(!empty($pprise)) 
                   {
                      $query=("UPDATE stock SET  productprise='".$pprise."'  WHERE barcode=".$code);
                     if(mysqli_query($conn,$query))
                     {
                        header("location:addstock.php?ok2=1");
                     }        
                   }
                 
                   if(empty($pprise)) 
                   {
                      $query=("UPDATE stock SET  productquantity='".$newq."'  WHERE barcode=".$code);
                     if(mysqli_query($conn,$query))
                     {
                        header("location:addstock.php?ok2=1");
                     }        
                   }
                   else
                   {
                        $query=("UPDATE stock SET  productquantity='".$newq."',productprise='".$pprise."' WHERE barcode=".$code);
                     if(mysqli_query($conn,$query))
                     {
                        header("location:addstock.php?ok2=1");
                     }   
                   }
                   

            }
            else
            {
                $msg.="<li style='list-style: none;'> Item is not avelible plese add it throuh addstock module";
                header("location:addstock.php?error2=".$msg); 
            }
        }

     }
?>