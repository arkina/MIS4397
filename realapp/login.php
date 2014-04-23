<?php
session_start();
mysqli_close($con);
mysqli_close($con);
mysqli_close($con);

include ("Includes/profileClass.php");

$email = $_POST[inputEmail];
$password = $_POST[inputPassword];

if($email && $password){
       
    $connect = mysql_connect("eu-cdbr-azure-north-c.cloudapp.net", "b83f0c340238ed", "4435a84d");
    if (!mysql_select_db('musiciantree512')){
        die('Could not select database : ' . mysql_error());
    }
    $query = "Select * from profile where email = '" . $email . "' AND password = '" .$password ."'";
    $result = mysql_query($query);
    if (!$result){
        die('Could not query: ' . mysql_error());    
    }
    if (mysql_num_rows($result) == 1){
        echo "logged in";
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
            header("Location: /main.php");
        }
    }

    mysql_close($connect);
    
    //echo "Username and Password did not match";
    //header("Location: /incorrectLogin.php");
}else{
    //echo "Username and Password did not match";
    //('<script type="text/javascript">alert("Username and Password did not match");</script>');
    //header("location:incorrectLogin.php");
    header("Location: /index.php");
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
