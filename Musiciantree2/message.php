<!-- Changed layout of message page.  -->
<!-- moved home button-->

<?php

?>

<!DOCTYPE html>
<html>
    <head>
    <title> Message </title>
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
      <button type = "button" class = "btn btn-default btn-lg"> 
        <span class = "glyphicon glyphicon-align-left"> </span>
      </button>
      <div class="nav navbar-nav navbar-right">
      <button type = "button" class = "btn btn-default btn-lg">
        <span class = "glyphicon glyphicon-home"> </span>
      </button>
      </div>
    </div>
    
       <form class="form-horizontal" role="form" action="insert.php" method="post">
     <div class="form-group">
     <label for="findFriend" class="col-sm-2 control-label">To: </label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="findFriend" placeholder="Name" name ="findFriend">
    </div>
  </div>

  <div class="form-group">
  <label for="Message" class="col-sm-2 control-label">Message:</label>
   <div class="col-sm-6">
  <textarea class="form-control" rows="5"></textarea>
  </div>
  </div>
    
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-primary">Send</button>
    </div>
    </div>
     </form>

     
  
  </body>
  
  
  </html>
