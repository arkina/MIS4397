<?php
session_start();

require_once ("/Includes/simplecms-config.php");

try {
    //make sure user only searched by one criterion
    //echo strlen($_POST["findUsername"]);
    if((isset($_POST["findUsername"]) && strlen($_POST["findUsername"]) > 0) && (isset ($_POST["Guitar"]) || isset ($_POST["Drums"]) || isset ($_POST["Bass"]) || isset ($_POST["Piano"]) || isset ($_POST["Vocals"])) ){
        //echo "Please search by either Last Name or Instrument";
        header("Location: /main.php");
        echo "Please search by either Last Name or Instrument";
    }
    else{
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
        if (isset($_POST["findUsername"])){
            $lname = strtoupper(trim($_POST["findUsername"]));
            //echo $lname;
            $query = "Select * from profile where UPPER(lastname) = '" . $lname . "'";            
            $result = mysql_query($query);
            if (!$result){
                die('Could not query: ' . mysql_error());    
            }

            $links = array();
            if (mysql_num_rows($result) > 0){
                while ($row = mysql_fetch_assoc($result)){
                    $links[] = "<a href='searchProfile.php?email=" . $row["email"]  . "'>" . $row["firstname"] . " " . $row["lastname"] . "</a>" . "<br>";
                }
            }
        }

                 //check for instruments submitted
                 //use loop to check for number of item checked and start building query on that 
        if (isset ($_POST["Guitar"]) || isset ($_POST["Drums"]) || isset ($_POST["Bass"]) || isset ($_POST["Vocals"]) || isset ($_POST["Piano"])){
            $guitar = $_POST["Guitar"];
            $drums = $_POST["Drums"];
            $bass = $_POST["Bass"];
            $vocals = $_POST["Vocals"];
            $piano = $_POST["Piano"];
            
            //right now query wont work if guitar isnt checked
            $query = "Select * FROM profile where ";
            if ($guitar) $query = $query . " inst1 = '" . $guitar . "'";
            if ($drums) $query = $query . " OR inst2 = '" . $drums . "'";
            if ($bass) $query = $query . " OR inst3 = '" . $bass . "'";
            if ($vocals) $query = $query . " OR inst4 = '" . $vocals . "'";
            if ($piano) $query = $query . " OR inst5 = '" . $piano . "'";
            

            $result = mysql_query($query);
            if (!$result){
                die('Could not query: ' . mysql_error());    
            }
            $links = array();
            if (mysql_num_rows($result) > 0){
                while ($row = mysql_fetch_assoc($result)){
                    $links[] =  "<a href='searchProfile.php?email=" . $row["email"]  . "'>" . $row["firstname"] . " " . $row["lastname"] . "</a>" . "<br>";
                }
              }
            }

        mysqli_close($con);
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
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
    
    <div class="jumbotron">
      <p id = "titleText"> Search Page </p>

        <div><?php echo implode("\n", $links);  ?></div>
        
   
        
    </div>  
</body>

</html>

