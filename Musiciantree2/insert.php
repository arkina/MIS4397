<?php

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
 
 
 header("Location: /profile.php");

 

/*     //store user info in an array to take into a session

    $query = "Select * from profile where email = '" . $_POST["inputEmail"] . "' AND password = '" .$_POST["inputPassword"] ."'";
    $result = mysql_query($query);
    
   // echo $query;
    
    if (!$result){
        die('Could not query: ' . mysql_error());    
   } 
    if (mysql_num_rows($result) == 1){
        //echo "logged in";
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
            $_SESSION['userProfile']=$userArray;
            $_SESSION['userProfileArraySize']=count($userArray);
            header("Location: /profile.php");
        }

  */      
    
 ?>

                        
