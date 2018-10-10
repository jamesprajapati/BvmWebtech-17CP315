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
    <form id="Registraion" style="margin:5px 5px 25px 5px;">
        <div class="form-group">
            <input class="form-control" id="shopkepper-name" placeholder="enter your Fullname" type="text">
        </div>
        <div class="form-group">
            <input class="form-control" id="shopname" placeholder="enter your shopname" type="text">
        </div>
        <div class="form-group">
            <input class="form-control" id="inputEmail" placeholder="Email Address" type="email">
        </div>
        <div class="form-group">
            <input class="form-control" id="inputPassword" placeholder=" create new Password" type="password">
        </div>
          <div class="form-group">
            <input class="form-control" id="inputPassword" placeholder="Confirm Password" type="password">
        </div>
        <div class="forgot">
        <a href="index.htm">Allredy have an Account? Login here.</a>
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
