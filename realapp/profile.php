<?php
    session_start();
    $userArray = (array) $_SESSION['userProfile'];


    define('DB_NAME', 'MusicianTree512');
    define('DB_USER', 'b83f0c340238ed');
    define('DB_PASSWORD', '4435a84d');
    define('DB_HOST', 'eu-cdbr-azure-north-c.cloudapp.net');

 if((isset($_POST["Youtube"]) && strlen($_POST["Youtube"]) > 0) && isset($_POST["summary"])){

        $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!mysql_select_db('musiciantree512')){
            die('Could not select database : ' . mysql_error());
        }

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
         $sql="UPDATE Profile SET YouTube = '" . $_POST["Youtube"] . "', Summary ='" . $_POST["summary"] . "' WHERE EMAIL = '" . $userArray["email"] . "';";
            
         echo $sql;
        $result = mysql_query($sql);
        if (!$result){
            die('Could not query: ' . mysql_error());    
        }
 
        mysqli_close($con);
        header("Location: /main.php");
    }

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
           <a href="#" class="btn btn-primary" role="button">Manage Instruments</a> 
        
        </p>
   </div>
   </div>
 
 
<div id="info">
<form role="form" name="summaryInput" action="profile.php" method="post">
  
  <div class="form-group">
    <label for="Summary">Summary</label>
    <textarea class="form-control" rows="5" placeholder="A brief description about yourself" id="summary" name="summary"></textarea>
  </div>

    <div class="form-group">
     <label for="Address">Youtube Channel</label>
     <input type="text" class="form-control" id="Youtube" placeholder="Youtube Channel Link" name="Youtube">
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
