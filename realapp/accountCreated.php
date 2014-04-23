<?php

?>

<!DOCTYPE html>
<html>
    <head>
    <title> Done </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link href="styles/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="styles/bootstrap/bootstrap-theme.css" rel = "stylesheet">
    <style type = "text/css">
    #message
    {
      text-align:center;
    }
    
    #continue
    {
      position:fixed; top: 300px; left: 400px;
        
    }
    </style>
    </head>
    
    <body>
    <form class="form-horizontal" role="form" action="/profile.php">
    <div class = "navbar navbar-inverse">  
    </div>
    
    <p id = "message"> Your Account has been created! </p>
    
    
    <div class="col-sm-offset-2 col-sm-10" id = "continue">
    <button type="submit" class="btn btn-default">Continue</button>
    </div>
    </form>
    </body>
    
    </html>
