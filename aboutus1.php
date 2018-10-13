<?php session_start();

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
<main class="about">  
   <div class="container-fluid">
           <div class ="myimage">
                <div class="container">
                   <center><img src="Gaurav.jpg" alt="devloper" class="img-responsive img-circle" width="200px" height="150px">
                   </center> 
                </div>
           </div>
           <br><br>
           <div  class="aboutme">
             <div class="container text-center"> 
              <b><h2>Designer & developer.</h2>
              <h3 >name:-Gaurav Prajapati.</h3></b>
              <h4>BTech computer Engineearing student at Birla VishvKarma Mahavidyalaya.</h4>

             </div>

           </div>
   </div>
</main>
<footer>
  <?php include("include/footer.php"); ?>
</footer>

</body>
</html>
