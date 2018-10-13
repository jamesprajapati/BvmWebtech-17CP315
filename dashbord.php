<?php session_start();
  $msg="";
		require("database/connection.php");
	
		 if(!isset($_SESSION['status']))
		 { 
			$msg.="<li style='list-style:none;'> plese login here..";
			header("location:index.php?error=".$msg);
		 }

 ?>
<!DOCTYPE html>
<html>
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
			<legend>view product Stock</legend>
			</fieldset>
	     	<form class="form-inline" method="post" action="dashbord.php">
  			  <div class="form-group">
    				<label  for="barcode">Product code:</label>
    				<input type="text" class="form-control" id="barcode" name="pcode">
  				</div>
    			
      			&nbsp;&nbsp;	
    			<button type="submit" class="btn btn-success">View Stock</button>
		</form>
	
       <div class="container" style="height:auto;">
             <?php
			     	if(!empty($_POST))
					 {
		      ?>
			  <table class="table table-bordered table-responsive">
                <tr>
                     <th>index</th>
                     <th>barcode</th>
                     <th>prodcut </th>
                     <th>company name</th>
                     <th>itemtype</th>
                     <th>quantity</th>
                     <th>prise</th>
			 <?php
				    if(empty($_POST['pcode']))
					{
						 $query="SELECT * FROM stock";
						 $result= mysqli_query($conn,$query) or die("Can't Execute Query...");
						 
						 while($row=mysqli_fetch_assoc($result))
						 {
							 ?>
							  <tr>
								  <td><?php echo $row['index_no'] ?></td>
								  <td><?php echo $row['barcode']; ?></td>
								  <td><?php echo $row['productname']; ?></td>
								  <td><?php echo $row['companyname']; ?></td>
								  <td><?php echo $row['itemtype']; ?></td>
								  <td><?php echo $row['productquantity']; ?></td>
								  <td><?php echo $row['productprise']; ?></td>
							  </tr>	
				            <?php
							 }
							}else
							{
								$code=$_POST['pcode'];
								
							   $query="SELECT * FROM stock WHERE barcode=$code ";
								   
								
								$result= mysqli_query($conn,$query) or die("Can't Execute Query...");
								while($row=mysqli_fetch_assoc($result))
								{
									?>
									 <tr>
										 <td><?php echo $row['index_no'] ?></td>
										 <td><?php echo $row['barcode']; ?></td>
										 <td><?php echo $row['productname']; ?></td>
										 <td><?php echo $row['companyname']; ?></td>
										 <td><?php echo $row['itemtype']; ?></td>
										 <td><?php echo $row['productquantity']; ?></td>
										 <td><?php echo $row['productprise']; ?></td>
									 </tr>
									<?php
								}	 
							}
					 }	
   
					 mysqli_close($conn);

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