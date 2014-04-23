<!-- Moved the Home button on navbar to the right -->

<?php

session_start();

require_once ("Includes/simplecms-config.php"); 
require_once  ("Includes/dbConnection.php");

//$query = "Select * from profile where email = '" . $email . "' AND password = '" .$password ."'";
//$result = mysql_query($query);

?>

<!DOCTYPE html>
<html>
    <head>
    <title> Musician Tree </title>
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
    #search
    
    {
      position:absolute; top: 600px; left: 400px;  
    }
    
    .nav nav-pills nav-stacked
    {
      position:fixed;
    }
    </style>
    </head>
    
<body>
  <div class = "navbar navbar-inverse">  
      <button type = "button" class = "btn btn-default btn-lg"> 
        <span class = "glyphicon glyphicon-align-left"> </span>
      </button>
      <div class="nav navbar-nav navbar-right">
      <button type = "button" class = "btn btn-default btn-lg">
        <span class = "glyphicon glyphicon-home"> </span>
      </button>
    </div>
    </div>

    <ul class="nav nav-pills">
    <li> <a href="profile.php"> Profile 
    <span class = "glyphicon glyphicon-user"> </span>
    </a>
    </li>
    
    <li> <a href="message.php"> Messages 
    <span class = "glyphicon glyphicon-envelope"> </span>
    </a>
    </li>
    
    <li> <a href="friends.php"> Friends 
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
    
    <div class="jumbotron">
      <p id = "titleText"> Find a Musician! </p>
        <p> Search by Last Name or Instrument</p>
  <form class="form-horizontal" role="form" action="/searchResults.php" method="post">
            <div class="form-group">
            <label for="findUser" class="col-sm-offset-2 col-sm-10"> Name </label>
            <div class="col-sm-offset-2 col-sm-10">
            <input type="text" class="form-control" id="findUsername" name="findUsername" placeholder="Search by Last Name">
            </div>
     </div>
   
     
     
     
      <div class="form-group">
      <label for="findInstruments" class="col-sm-offset-2 col-sm-10"> Instruments </label>
      </div>
      
      
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
      <label> <input type="checkbox" value="Guitar" name="Guitar"> Guitar </label>
      </div>
      </div>
      </div>
      
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
      <label> <input type="checkbox" value="Drums" name="Drums"> Drums </label>
      </div>
      </div>
      </div>
  
  
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
      <label> <input type="checkbox" value="Bass" name="Basss"> Bass </label>
      </div>
      </div>
      </div>
  
     <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
     <div class="checkbox">
     <label> <input type="checkbox" value="Piano" name="Piano"> Piano </label>
     </div>
     </div>
     </div>
  
     <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
     <div class="checkbox">
     <label> <input type="checkbox" value="Vocals" name="Vocals"> Vocals </label>
     </div>
     </div>
     </div>
  
     <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10" id = "search">
     <button type="submit" class="btn btn-primary">Search</button>
     </div>
     </div>
     
    </div>
     
  </form>
    
    
    
    
    
</body>
  
</html>
