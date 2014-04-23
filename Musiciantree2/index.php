    <?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/dbConnection.php");
        //include("Includes/header.php");         
     ?>


    <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<title> Log-In </title>
<link href="/styles/bootstrap/bootstrap.css" rel="stylesheet">
<link href="/styles/bootstrap/bootstrap-theme.css" rel = "stylesheet">
<style type = "text/css">
#title
 {
    position:fixed; left: 200px;
 }
 

 #login
 {
  position:fixed; top: 450px; left: 475px;
 }
  
</style>

</head>

<body>

<!-- Logo    -->
<div id = "title"> 
<img class = "featureImg" src = "/images/logo.jpg" alt="Logo">
</div>


<!-- Form for inputting email, password, and log-in  -->
<form class="form-horizontal" role="form" action="/login.php" method="post">
<div id = "login">
    <div class="form-group">
    <label for="inputFirstName" class="col-sm-2 control-label"> </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" placeholder="Email@example.com" name="inputEmail">
    </div>
    </div>
  
  <div class="form-group">
    <label for="inputLastName" class="col-sm-2 control-label"> </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" placeholder="Password" name="inputPassword">
    </div>
  </div>
  
  
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Log In</button>
    </div>
  </div>
    
 </form>

<form class="form-horizontal" role="form" action="/createAccount1.php">
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button name ="createAccount" type="submit" class="btn btn-primary">Create Account</button>
    </div>
  </div>
  
  
  
</div>  <!-- Closes <div id = login -->
</form>

</body>

 
</html>

<?php 
    //include ("Includes/footer.php");
 ?>