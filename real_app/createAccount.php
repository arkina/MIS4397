<!-- Changed the format again... is it not saving live?-->
<!-- Changed the col-sm-10 sizes in div tags to col-sm-6 to make the horizontal bars skinnier -->
<!-- Changed Title -->
<?php
    session_start();

require_once ("Includes/simplecms-config.php"); 
require_once  ("Includes/dbConnection.php");

?>
<!DOCTYPE html>
<html>
    <head>
    <title> Create a Account </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link href="styles/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="styles/bootstrap/bootstrap-theme.css" rel = "stylesheet">
    <style type = "text/css">
    h6
    {    
      color: white;   
    }
    h3
    {
        text-align: center;        
    }
    #input1
    {
        position:absolute; top:300px; left:600px;
    }
    #input2
    {
        position:absolute; top:400px; left:600px;
    }
    #continue
    {
        position:absolute; top:500px; left: 625px;
    }
    </style>
    </head>
    <body>
    <div class = "navbar navbar-inverse">  
    <button type = "button" class = "btn btn-default btn-lg"> 
        <span class = "glyphicon glyphicon-arrow-left"> </span>
    </button>
    </div>
 <form class="form-horizontal" role="form" action="insert.php" method="post">

      <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Enter your Email Address </label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="inputEmail">
    </div>
  </div>

   <div class="form-group">
    <label for="FirstName" class="col-sm-2 control-label">First Name: </label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="FirstName" placeholder="First Name" name="FirstName">
    </div>
  </div>
  
  <div class="form-group">
    <label for="LastName" class="col-sm-2 control-label"> Last Name: </label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="LastName" placeholder="Last Name" name="LastName">
    </div>
  </div>
  
 
     <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="inputPassword">
    </div>
  </div>


    <div class="form-group">
    <label for="confirmPassword" class="col-sm-2 control-label">Re-Type Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword2" placeholder="Password Again" name="inputPassword2">
    </div>
    </div>

   <div class="form-group">
    <label for="inputDate" class="col-sm-2 control-label">Enter date of birth </label>
    <div class="col-sm-6">
      <input type="date" class="form-control" id="inputDate" placeholder = "MM/DD/YYYY" name="inputDate">
    </div>
  </div>
     
       <div class="form-group">
      <label for="selectInstruments" class="col-sm-offset-2 col-sm-10"> What Instruments do you play? </label>
      </div>
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
      <label> <input type="checkbox" value="Guitar" id="inst1" name="inst1"> Guitar </label>
      </div>
      </div>
      </div>
      
  
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <div class="checkbox">
    <label> <input type="checkbox" value="Drums" id="inst2" name="inst2"> Drums </label>
    </div>
    </div>
    </div>
  
  
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <div class="checkbox">
    <label> <input type="checkbox" value="Bass" id="inst3" name="inst3"> Bass </label>
    </div>
    </div>
    </div>
  
  <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
  <div class="checkbox">
    <label> <input type="checkbox" value="Piano" id="inst4" name="inst4"> Piano </label>
  </div>
  </div>
  </div>
  
  <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
  <div class="checkbox">
    <label> <input type="checkbox" value="Vocals"  id="inst5" name="inst5"> Vocals </label>
  </div>
  </div>
  </div>




     <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Continue</button>
    </div>
  </div>
 </form>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

