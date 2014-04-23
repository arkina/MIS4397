<?php
    session_start();
    $userArray = (array) $_SESSION['userProfile'];
?>

<!DOCTYPE html>
<html>
    <head>
    <title> Profile Page </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link href="styles/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="styles/bootstrap/bootstrap-theme.css" rel = "stylesheet">
    <style type = "text/css">
     #info
        {
            position: relative; top: 50px;
            
        }
    </style>
    </head>
<body>
    <div class = "navbar navbar-inverse">  
      <button type = "button" class = "btn btn-default btn-lg"> 
        <span class = "glyphicon glyphicon-align-justify"> </span>
      </button>
    <div id="home" class="nav navbar-nav navbar-right">
      <button type = "button" class = "btn btn-default btn-lg">
        <span class = "glyphicon glyphicon-home"> </span>
      </button>
    </div>
    </div>
 
    <h3> Profile Page </h3>
    <p> Hello <strong><?php echo $userArray["firstname"] . ' ' . $userArray["lastname"]; ?></strong> </p>
    <br>
    <p> </p>
    <br>
 
  <div class="row">
  <div class="col-xs-10">
  <img class = "thumbnail" src = "images/blank-profile.png" alt="pic" width="100" height="100">
        
   
        <p><a href="#" class="btn btn-primary" role="button">Manage Pictures</a> 
           <a href="#" class="btn btn-default" role="button">Manage Videos</a>
           <a href="#" class="btn btn-primary" role="button">Manage Instruments</a> 
        
        </p>
   </div>
   </div>
 
 
<div id="info">
<form role="form" name="summaryInput">
  
  <div class="form-group">
    <label for="Summary">Summary</label>
    <textarea class="form-control" rows="5"></textarea>
  </div>
 
 <div class="form-group">
     <label for="Contact">Contact Information</label>
     <input type="number" class="form-control" id="inputContact" placeholder="000-000-0000" name="inputContact">
 </div>
 
   <div class="form-group">
     <label for="Address">Address</label>
     <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="inputAddress">
   </div>
 
    <div id = "update">
    <button type="submit" class="btn btn-success">Update Profile</button>
    </div>
</form>
</div>
 
 
 
</body>
</html>
