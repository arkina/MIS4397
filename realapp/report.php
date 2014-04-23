<?php

?>

<!DOCTYPE html>
<html>
    <head>
    <title> Report </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link href="styles/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="styles/bootstrap/bootstrap-theme.css" rel = "stylesheet">
    <style type = "text/css">
    p
    {
      text-align:center;   
    }
    </style>
    </head>
    
    <body>
    
<div class = "navbar navbar-inverse">  

    <ul class="nav nav-pills">

    <li> <a href="main.php"> Home 
    <span class = "glyphicon glyphicon-home"> </span>
    </a>
    </li>

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
 




    
     
    
    <form class="form-horizontal" role="form" action="insert.php" method="post">
        <div class="form-group">
  <label for="Report" class="col-sm-2 control-label"><u>Report a Problem</u></label>
            </div>
         <div class="form-group">
  <label for="Issue" class="col-sm-2 control-label">Issue:</label>
   <div class="col-sm-6">
  <textarea class="form-control" rows="5"></textarea>
  </div>
  </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-primary">Send</button>
    </div>
    </div>
     </form>

     
     
</html>
