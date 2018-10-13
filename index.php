<?php session_start();
if(isset($_SESSION['status']))
{ 

 header("location:dashbord.php");
}

?>
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
<main class="main">  
<div class="container-fluid">    
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
   <div>
   <?php
       if(isset($_GET['error']))
          {
            echo '<font color="red">'.$_GET['error'].'</font>';
            echo '<br><br>';
          }
    ?>      
   </div>
    <form id="Login" method="post" action="login.php">

        <div class="form-group">
            <input class="form-control" id="inputEmail" placeholder="Email Address" type="email" name="eid" >
        </div>
        <div class="form-group">
            <input class="form-control" id="inputPassword" placeholder="Password" type="password" name="psw">
        </div>
        <div class="forgot">
        <a href="Signup.php">new user? click here.</a>
      </div>
        <br>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div> 
  </div>
   </div>
</div>
</main>
<footer>
  <?php
   include("include/footer.php");
  ?>
</footer>

</body>
</html>
