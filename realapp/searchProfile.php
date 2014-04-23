<?php
    
function getUserProfile($email) {
        try {
        if(isset($_GET["email"]) && strlen($_GET["email"]) > 0) {
            define('DB_NAME', 'MusicianTree512');
            define('DB_USER', 'b83f0c340238ed');
            define('DB_PASSWORD', '4435a84d');
            define('DB_HOST', 'eu-cdbr-azure-north-c.cloudapp.net');
            $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            if (!mysql_select_db('musiciantree512')){
               die('Could not select database : ' . mysql_error());
            }
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $query = "Select * from profile where UPPER(email) = '" . $email . "'";            
            $result = mysql_query($query);
            if (mysql_num_rows($result) === 1){
                while ($row = mysql_fetch_assoc($result)){
                    $userArray = array(
                    "firstname" => $row["firstname"], 
                    "lastname" => $row["lastname"],
                    "dob" => $row["dob"],
                    "email" => $row["email"],
                    "inst1" => $row["inst1"],
                    "inst2" => $row["inst2"],
                    "inst3" => $row["inst3"],
                    "inst4" => $row["inst4"],
                    "inst5" => $row["inst5"]);
                }
            }
            return $userArray;
        }
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

if(isset($_GET["email"])){
    $userProfile = getUserProfile($_GET["email"]);
    //echo "Last Name :" . $userProfile["lastname"] . ", First Name " . $userProfile["firstname"];
}else{
    header("Location: /main.php");
}

mysqli_close($con);

?>

<!DOCTYPE html>
<html>
    <head>
    <title> Search Profile </title>
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
    
    <div class="jumbotron">
      <p id = "titleText"> Search Page </p>
        
        <form class="form-horizontal" role="form">
        <div class="form-group">
            <label for="findUser" class="col-xs-2"> First Name </label>
            <div class="col-xs-offset-6 col-sm-10"><?php echo $userProfile["firstname"]; ?> </div>
            </div>   

        <div class="form-group">
        <label for="findLastName" class="col-xs-2"> Last Name</label>
        <div class="col-xs-offset-6 col-sm-10"><?php echo $userProfile["lastname"]; ?> </div>
        </div>

        <div class="form-group">
        <label for="findUserName" class="col-xs-2"> Email </label>
            <div class="col-xs-offset-6 col-sm-10"><?php echo $userProfile["email"]; ?> </div>
        </div>

        <div class="form-group">
        <label for="findInstrument" class="col-xs-2">Instrument</label>
            <div class="col-xs-offset-6 col-sm-10"><?php echo $userProfile["inst1"]; ?> </div>
        </div>

        <div class="form-group">
        <label for="findYoutube" class="col-xs-2"> Youtube Link</label>
            <div class="col-xs-offset-6 col-sm-10"><?php echo $userProfile["youtube"]; ?> </div>
        </div>

    </form>
        
    </div>  
        
            
<!--        
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
--> 
    
    
</body>
  
</html>
