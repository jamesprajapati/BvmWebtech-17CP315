<?php session_start();

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
  <script type="text/javascript">
     function timedate(){

       var d= new Date();
       document.getElementById("Invoice-date").innerHTML=d.getDay()+"/"+d.getMonth()+"/"+d.getFullYear();
       document.getElementById("Invoice-time").innerHTML=+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
     }
  </script>
</head>
<body style="min-width:580px;" onload="timedate()">
<header>
<?php include("include/headerafterlogin.php"); ?>
</header>
<main id="invoice"> 
     <div  id="ins">
        <div class="container-fluid" style="background:white; width:auto; height:100%; border: 1px solid black; border-radius: 5px;box-shadow: 0 2px 4px grey; margin:5px 5px 5px 5px; padding-left:5px; padding-right:5px; ">
        <div class="col-sm-12 " style="text-align: center;">
            <h2>Invoice</h2>
         </div>
        <div class="col-sm-4;" style="margin-top:7%;">
           <h2>ShopName:gift-shop</h2>
           <h4>address:32-sama vadodara 390008</h4>
        </div>
        <div class="col-sm-4"  style="clear:both;">
                <table class="table table-bordered table-responsive">
                  <tr>
                     <th style="background:gray;">Date:</th>
                      <td id=Invoice-date></td>
                      <th style="background:gray;">Time:</th>
                         <td id=Invoice-time></td>
                  </tr>
                </table>
            
        </div>
           <div class="col-sm-4;" style="width: auto;margin-left: 80%;">
            <table class="table table-bordered table-responsive">
              <tr>
                <th style="background:gray; width:70%;">Invoice no:</th>
                 <td>&nbsp;</td>
              </tr>
            </table>
          </div>
              
              <input type="text" class="form-control" id="Cname" placeholder="customer-name" style=" height:100%; margin-bottom:1%;" >                     
              <table class="table table-bordered table-responsive table1" id="table1">
                           <tr>
                             <th style="width:7%;">Item no</th>
                             <th style="width:25%;">Item Barcode</th>
                             <th style="width:20%;">Item name</th>
                             <th style="width:20%;">description</th>
                             <th style="width:10%;">price</th>
                             <th style="width:5%;">quntity</th>
                             <th style="width:5;">total</th>
                           </tr>
                           <tr>
                             <td>&nbsp;</td>
                             <td>&nbsp;</td>
                             <td>&nbsp;</td>
                             <td>&nbsp;</td>
                             <td>&nbsp;</td>
                             <td>&nbsp;</td>
                             <td>&nbsp;</td>
                           </tr> 
                  </table>
                  <table class="table table-responsive table-bordered table2"  >
                    <tr>
                       <th>discount %:</th>
                       <td>&nbsp;</td>
                    </tr>
                    <tr>
                       <th>total</th> 
                       <td>&nbsp;</td>
                    </tr>
                  </table>
                  
                     <a href="#" class="btn btn-success btn-lg" style="margin-bottom:1%;">
                      Print 
                     </a>
                  
              </div>
     </div>
</main>
<footer>
   <?php include("include/footer.php"); ?>
</footer>
</body>
</html>
