<?php session_start();
 require("database/connection.php");          
 if(!isset($_SESSION['status']))
 { 
    $msg.="<li style='list-style:none;'> plese login here..";
    header("location:index.php?error=".$msg);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("include/headstyle.php"); ?>
</head>
<body>
<header>
<?php include("include/headerafterlogin.php"); ?>
</header>
<main class="dashbord">  
<div class="container-fluid" style="height:100%;">
		<fieldset>
			<legend>view login  history</legend>
	   </fieldset>
       
       <div class="container" style="height:auto;">
       <table class="table table-bordered table-responsive">
                <tr>
                     <th>index</th>
                     <th>shopkeeper</th>
                     <th> email_id</th>
                     <th>datetime</th>
                     <th>logtype</th>
                </tr>     
                <?php
                 $email=$_SESSION['id'];
                 $query="SELECT *  FROM loh WHERE (`email_id` LIKE '%".$email."%')";
								   
								
                 $result= mysqli_query($conn,$query) or die("Can't Execute Query...");
                 $count=1;
                 while($row=mysqli_fetch_assoc($result))
                 {
                     ?>
                      <tr>
                          <td><?php echo $count; ?></td>
                          <td><?php echo $row['shopkeeper']; ?></td>
                          <td><?php echo $row['email_id']; ?></td>
                          <td><?php echo $row['date_timex']; ?></td>
                          <td><?php echo $row['logx']; ?></td>
                      </tr>
                   <?php
                   $count++;
                 }
                   ?>   
         </table>       
       </div>
	  
 </div>       
</main>
<footer>
<?php include("include/footer.php"); ?>
</footer>
</body>
</html>