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
    <form id="Login" action="dashbord.php">

        <div class="form-group">
            <input class="form-control" id="inputEmail" placeholder="Email Address" type="email" onchange="ValidateEmail() ">
        </div>
        <div class="form-group">
            <input class="form-control" id="inputPassword" placeholder="Password" type="password">
        </div>
        <div class="forgot">
        <a href="Signup.htm">new user? click here.</a>
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
