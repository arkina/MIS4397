<?php
    session_start();

    define('DB_NAME', 'MusicianTree512');
    define('DB_USER', 'b83f0c340238ed');
    define('DB_PASSWORD', '4435a84d');
    define('DB_HOST', 'eu-cdbr-azure-north-c.cloudapp.net');


//require_once ("/Includes/simplecms-config.php");
 
$con = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not       connect to MySQL');
 
if (mysqli_connect_errno())
  {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if ($_POST["inputDate"] === "")
  {
    $_POST["inputDate"] = "',NULL,'";
  }
  else
  {
    $_POST["inputDate"] = "','" . $_POST["inputDate"] . "','";      
  }
    $sql="INSERT INTO Profile (firstName, lastName, email, password, DOB, inst1, inst2, inst3, inst4, inst5) 
    VALUES('" . $_POST["FirstName"] . "','" . $_POST["LastName"] . "','" . $_POST["inputEmail"] . "','" . $_POST["inputPassword"] . $_POST["inputDate"] . $_POST["inst1"] . "','" . $_POST["inst2"] . "','" . $_POST["inst3"] . "','" . $_POST["inst4"] . "','" . $_POST["inst5"] . "');";
    
if ($con->query($sql) === FALSE)
{
    die('Error: ' . mysql_error($con));
}
 
//echo "1 record added";


 mysqli_close($con);
 
 
 //header("Location: /profile.php");

 //store user info in an array to take into a session

            $userArray = array(
            "firstname" => $_POST["FirstName"], 
            "lastname" => $_POST["LastName"],
            "dob" => $_POST["inputDate"],
            "email" => $_POST["inputEmail"],
            "inst1" => $_POST["inst1"],
            "inst2" => $_POST["inst2"],
            "inst3" => $_POST["inst3"],
            "inst4" => $_POST["inst4"],
            "inst5" => $_POST["inst5"]);
            $_SESSION['userProfile']=$userArray;
            $_SESSION['userProfileArraySize']=count($userArray);
            header("Location: /profile.php");
        

        
    
 ?>

                        
