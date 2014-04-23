<!-- Changed layout of message page.  -->
<!-- moved home button-->
<?php
    session_start();
    $sentmessage = $_SESSION["sentmessage"];
    $userArray = (array) $_SESSION['userProfile'];

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
    if(isset($_POST["to"])  && strlen($_POST["to"]) > 0 && isset($_POST["body"]) && strlen($_POST["body"]) > 0){
        //create time stamp
        $createdate= date('Y-m-d H:i:s');
   
        //insert into DB
        $sql="INSERT INTO privatemessages (`to`,`body`,`from`,`timestamp`,`read`) 
        VALUES('" . $_POST["to"] . "','" . $_POST["body"] . "','" . $userArray["email"] . "','" . $createdate . "'," . 0 . ");";
    
        $result = mysql_query($sql);
        if (!$result){
            die('Could not query: ' . mysql_error());    
        }
        $sentmessage = "Message Sent!";
        $_SESSION['sentmessage']= $sentmessage;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Message </title>
        <meta charset="utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
        <link href="styles/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="styles/bootstrap/bootstrap-theme.css" rel = "stylesheet">
        <style type = "text/css">
            p
            {
                text-align:center;
            }
            .container
            {
              width:80%;
              height:50%;
              background-color:#eee;
            }
            .div-table{
                display:table;         
                width:auto;         
                background-color:#eee;         
                border:1px solid  #666666;         
                border-spacing:5px;/*cellspacing:poor IE support for  this*/
            }
            .div-table-row{
                display:table-row;
                width:auto;
                clear:both;
            }
            .div-table-col{
                float:left;
                display:table-column;         
                width:200px;         
                background-color:#ccc; 
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
    <div class="container" id="11">
        <form role="form" class="form-horizontal" action="message.php" method="post">
            
            
            <div class="form-group">
                <p style="color: green"><?php echo $sentmessage; ?></p>
            </div>
            
            
            <label for="findFriend" class="col-sm-2 control-label">To: </label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="to" placeholder="Name" name ="to">
            </div>


          <div class="form-group col-sm-offset-2">
          <label for="Message" class="col-sm-2 control-label"></label>
           <div class="col-sm-6 col-sm-offset-2">
          <textarea class="form-control" rows="5" name="body"></textarea>
          </div>
          </div>
    
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6 col-xs-offset-4">
            <button type="submit" class="btn btn-primary">Send</button>
            </div>
            </div>
        </form>
    </div>      
    <div class="container" id="22">
 
        <?php
            //Search DB for messages to user 
            $query = "Select * from privatemessages where `to` = '" . $userArray["email"] . "' order by timestamp desc";
            $result = mysql_query($query);
            if (!$result){
                die('Could not query: ' . mysql_error());    
            }
            if (mysql_num_rows($result) > 0){
                echo "<div class='div-table'>";
                echo "<div class='div-table-row'><div class='div-table-col'>From</div><div class='div-table-col'>Message</div><div class='div-table-col'>Date</div></div>";
                while ($row = mysql_fetch_assoc($result)){
                    $from = strlen($row["from"]) == 0 ? "Null" : $row["from"];
                    $body = strlen($row["body"]) == 0 ? "Null" : $row["body"];
                    echo "<div class='div-table-row'><div class='div-table-col'>" . $from . "</div><div class='div-table-col'>" . $body . "</div><div class='div-table-col'>" . $row["timestamp"] . "</div></div>";
                }
                echo "</div>";
            }
        ?>
    </div>
    </body>
    <?php             
        mysqli_close($con);
    ?>
</html>
