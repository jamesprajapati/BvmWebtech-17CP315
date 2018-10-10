<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("include/headstyle.php"); ?>
</head>
<body>
<header>
<?php include("include/headerbeforelogin.php"); ?>
</header>
      <main class="cnt" >
            <div class="container-fluid">
              <fieldset>
              <legend>Contect us</legend>
        <form class="form-horizontal">      
         <div class="form-group">
         <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="user's name">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="feedback">message:</label>
      <div class="col-sm-10">          
        <textarea class="form-control" rows="5" placeholder="Enter your feedback."></textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
   </fieldset>
       </div>
      </main>
<footer>
    <?php include("include/footer.php"); ?>
</footer>
</body>
</html>
