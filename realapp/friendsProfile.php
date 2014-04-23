<?php

?>

<!DOCTYPE html>
<html>
    <head>
    <title> Friend Profile Page </title>
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

    <div>
    <ul class="nav nav-pills">
    <li> <a href="profile.php"> Profile 
    <span class = "glyphicon glyphicon-user"> </span>
    </a>
    </li>
    
    <li> <a href="message.php"> Messages 
    <span class = "glyphicon glyphicon-envelope"> </span>
    </a>
    </li>
    
    <li> <a href="friends.php"> Find Friends 
    <span class = "glyphicon glyphicon-tree-deciduous"> </span>
    </a>
    </li>
    
    <li> <a href="report.php"> Report a Problem
    <span class = "glyphicon glyphicon-pencil"> </span>
    </a>
    </li>
    
    <li> <a href="/logout.php"> Log-Out
    <span class = "glyphicon glyphicon-off"> </span>
    </a>
    </li>
    </ul>
    </div>
 
    <h3> Friend Profile Page </h3>
    <p> Hello <strong><?php echo $userArray["firstname"] . ' ' . $userArray["lastname"]; ?></strong> </p>
    <br>
    <p> </p>
    <br>
 
  <div class="row">
  <div class="col-xs-10">
  <img class = "thumbnail" src = "images/blank-profile.png" alt="pic" width="100" height="100">
        
   
        <p>
           <a href="#" class="btn btn-default" role="button">Add Friend</a> 
           <a href="#" class="btn btn-success" role="button">Message</a> 
           <a href="#" class="btn btn-danger" role="button">Block User</a>
        </p>
   </div>
   </div>
 
 
<div id="info">
<form role="form" name="summaryInput">
  
  

<div class="panel panel-default">
  <div class="panel-heading">
     <div class="panel-title">Summary</div>
  </div>
  <textarea class="form-control" rows="5"></textarea>
  </div>

    

<div class="panel panel-default">
  <div class="panel-heading">
     
    <div class="panel-title">Youtube Channel</div>
  </div>
 
    
    <input type="text" class="form-control" id="youtube" placeholder="Youtube Channel Link" name="Youtube">
    
</div>     





<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Instruments</h3>
  </div>
  <div class="panel-body">
    
  </div>
</div>     



 

<div class="panel panel-default">
  <div class="panel-heading">
     <div class="panel-title">Phone</div>
  </div>
   <input type="number" class="form-control" id="inputContact" placeholder="000-000-0000" name="inputContact">
  </div> 

<div class="panel panel-default">
  <div class="panel-heading">
     <div class="panel-title">Address</div>
  </div>
  <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="inputAddress">
  </div> 


<div class="panel panel-default">
  <div class="panel-heading">
     <div class="panel-title">Email</div>
  </div>
<input type="text" class="form-control" id="email" placeholder="Email" name="Email">
  </div>

  



 
   
</form>
</div>
 
 
 
</body>
</html>
