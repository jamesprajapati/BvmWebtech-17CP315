<?php session_start();

if(!isset($_SESSION['status']))
{ 
 $msg.="<li style='list-style:none;'> plese login here..";
 header("location:index.php?error=".$msg);
}

$ok=NULL;
if(isset($_GET['ok']))
{
   $ok=" Stock Added Sucsessfully.";
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include("include/headstyle.php"); ?>
</head>
<body onload="hide()">
<header>
<?php include("include/headerafterlogin.php"); ?>
</header>
<main class="ast ">
          <div class="container-fluid ">
            <fieldset>
              <legend>
                <div id="set">
                   <input type="radio"  id="stock1" name="stock" class="addstock" value="addstock" onclick="hide()" checked><label for="stock1" class="tab">Addstock</label> &nbsp; 
                   <input type="radio" id="stock2" name="stock" class="updatestock" value="updatestock" onclick="hide()"><label for="stock2" class="tab">UpdateStock</label>
                      </div>
              </legend>
              </fieldset>
              <div id="f1">
              <div>
              <?php 
                     if(isset($_GET['error']))
                     {
                       echo '<font color="red">'.$_GET['error'].'</font>';
                       echo '<br><br>';
                     }
                     if(isset($ok))  
                     {
                      echo '<font color="blue">You are item is add  successfully.... </font>';
                      echo '<br><br>';
                     }
               ?>         
              </div>
              <!--addstock form-->
             <div class="form1">
               <form class="form-horizontal" method="post" action="adddb.php">      
         <div class="form-group">
            <label class="control-label col-sm-2" for="prname">Product Name:</label>
           <div class="col-sm-10">
            <input type="text" class="form-control" id="prname" placeholder="Enter Product Name" name="pname">
          </div>
         </div>
    <div class="form-group">
         <label class="control-label col-sm-2" for="crname">Company Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="crname" placeholder="Enter Product's Company Name" name="cname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >ItemType:</label>
      <div class="col-sm-10">
               <input type="radio" name="item" value="giftitem" >  <b>GiftItems </b>&nbsp;
                 <input type="radio" name="item" value="stationeryitem"><b>StationeryItems</b>         
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="barcode">Product code:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="barcode" placeholder="Enter barcode" name="pcode">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="quantity">Quantity:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Quantity" placeholder="Enter Quantity of Product item" name="pquantity">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pprise">Prise:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pprise" placeholder="Enter Product cost" name="prise">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">addstock</button>
      </div>
      </div>
    </form>
             </div>
          </div>  
      <!--update stock form-->
       <div id="f2">
       <div>
              <?php 
                     $flag=0;
                     if(isset($_GET['error2']))
                     {
                       echo '<font color="red">'.$_GET['error2'].'</font>';
                       echo '<br><br>';
                       $flag=1;
                     }
                     if(isset($_GET['ok2']))
                      {
                        echo '<font color="blue">You are item is updated  successfully.... </font>';
                        echo '<br><br>';
                        $flag=1;
                      }
                  ?>
                  <script>
                         var flag=<?php echo $flag ?>
                  </script>
             </div>        
          <form class="form-horizontal" method="post" action="updatedb.php"> 
              <div class="form-group">
                  <label class="control-label col-sm-2" for="barcode">Product code:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="barcode" placeholder="Enter barcode" name="pcode">
                  </div>
               </div>   
               <div class="form-group">
                  <label class="control-label col-sm-2" for="pprise">Prise:</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="prise" placeholder="Enter Product cost" name="prise">
                  </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pquantity">Quantity:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="pquantity" placeholder="Enter Quantity of Product item" name="quantity">
                    </div>
                  </div>    
                  <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" onclick="hide()">UpdateStock</button>
                      </div>
                      </div>               
            </form>     
        </div>
	   </div>
     
  <script >function hide()
          {
            
            var addstock = document.getElementById("stock1");
            var updatestock =document.getElementById("stock2");
            var frame1=document.getElementById("f1");
            var frame2=document.getElementById("f2");      
            if(flag==1)
            {     flag=0;
                  updatestock.checked=true;
                     
            }
            frame1.style.display=updatestock.checked ? "none": "block";
            frame2.style.display=addstock.checked ? "none" : "block";    

            
          }

</script>
</main>
<footer>
 <?php include("include/footer.php"); ?>
</footer>
</body>
</html>