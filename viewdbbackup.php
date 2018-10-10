<?php
   require("database/connection.php");
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
       <div class="container" style="height:100%;">
                <table class="table table-bordered table-responsive">
                <tr>
                     <th>index</th>
                     <th>barcode</th>
                     <th>prodcut </th>
                     <th>company name</th>
                     <th>itemtype</th>
                     <th>quantity</th>
                     <th>prise</th>
                </tr>
                <?php              
                         if(!empty($_POST))
                         {
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


                ?>    
            </table>
       </div>
    </div>
    </main>
    <footer>
           <?php include("include/footer.php") ?>
    </footer>
</body>
</html>
