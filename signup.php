<!DOCTYPE html>
<html lang="en">
<head>
  <?php
     include("include/headstyle.php");
   ?>
</head>

<body>
<header>
<?php
    include("include/headerbeforelogin.php");
  ?>
</header>
<main class="regmain">  
<div class="container-fluid">    
<div class="main-div">
    <div class="panel">
   <h2>Admin Registraion</h2>
   <p>Please enter your details:</p>
   </div>
   <div>
       <?php
          
          if(isset($_GET['error']))
          {
            echo '<font color="red">'.$_GET['error'].'</font>';
            echo '<br><br>';
          }
          if(isset($_GET['ok']))  
          {
           echo '<font color="blue">'.$_GET['ok'].'  you are register successfully.... </font>';
           echo '<br><br>';
          }
       ?>
   </div>
    <form id="Registraion" style="margin:5px 5px 25px 5px;" method="post" action="registretion.php">
        <div class="form-group">
            <input class="form-control" id="shopkepper-name" placeholder="enter your Fullname" type="text" name="fullname">
        </div>
        <div class="form-group">
            <input class="form-control" id="shopname" placeholder="enter your shopname" type="text" name="shopname">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="5" id="shopAddress" placeholder="enter your shop address" name="spaddress"></textarea>
        </div>
        <div class="form-group">
            <input class="form-control" id="inputEmail" placeholder="Email Address" type="email" name="eid">
        </div>
        <div class="form-group">
            <input class="form-control" id="inputPassword" placeholder=" create new Password" type="password" name="pwd">
        </div>
          <div class="form-group">
            <input class="form-control" id="inputPassword" placeholder="Confirm Password" type="password" name="cpwd">
        </div>
        <div class="form-group">
            <input class="form-control" id="mobile" placeholder="enter your contect number" type="text" name="mobileno">
        </div>
        <div class="forgot">
        <a href="index.php">Allredy have an Account? Login here.</a>
      </div>
        <br>
        <button type="submit" class="btn btn-success">Sign-up</button>
    </form>
    </div> 
  </div>
   </div>
</div>
</main>
<footer>
 <?php include("include/footer.php") ?>
</footer>
</body>
</html> 
