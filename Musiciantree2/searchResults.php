<?php
session_start();

require_once ("/Includes/simplecms-config.php");

try {
    //make sure user only searched by one criterion
    if(isset ($_POST["findUsername"]) && (isset ($_POST["Guitar"]) || isset ($_POST["Drums"]) || isset ($_POST["Bass"]) || isset ($_POST["Piano"]) || isset ($_POST["Vocals"])) ){
        //echo "Please search by either Last Name or Instrument";
        header("Location: /main.php");
        echo "Please search by either Last Name or Instrument";
    }
    else{
        define ('DB_USER', 'joey');
        define ('DB_PASSWORD', 'batman21');
        define ('DB_HOST', 'localhost');
        define ('DB_NAME', 'musiciantree');
        $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!mysql_select_db('musiciantree')){
            die('Could not select database : ' . mysql_error());
        }

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        if (isset($_POST["findUsername"])){
            $lname = strtoupper(trim($_POST["findUsername"]));
            //echo $lname;
            $query = "Select email, firstname, lastname from profile where UPPER(lastname) = '" . $lname . "'";            
            $result = mysql_query($query);
            if (!$result){
                die('Could not query: ' . mysql_error());    
            }
            if (mysql_num_rows($result) > 0){
                while ($row = mysql_fetch_assoc($result)){
                    echo "<a href='searchProfile.php?email=" . $row["email"]  . "'>" . $row["firstname"] . " " . $row["lastname"] . "</a>" . "<br>";
                }
            }
        }
        mysqli_close($con);
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}





?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
