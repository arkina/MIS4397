<?php
require_once ("Includes/dbConnection.php");

//define ('DB_USER', 'joey');
//define ('DB_PASSWORD', 'batman21');
//define ('DB_HOST', 'localhost');
//define ('DB_NAME', 'musiciantree');
 
 //$con = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not       connect to MySQL');
 
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
    
//if ($con->query($sql) === FALSE)
if ($databaseConnection->query($sql) === FALSE)
{
    die('Error: ' . mysql_error($databaseConnection));
}
 
echo "1 record added";    
 
 mysqli_close($databaseConnection);

 
?>
 
<script type="text/javascript">location.href ='/accountCreated.php';</script>

                        
