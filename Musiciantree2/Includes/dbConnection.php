<?php
    global $mydatabaseConnection;

    define('DB_NAME', 'MusicianTree');
    define('DB_USER', 'joey');
    define('DB_PASSWORD', 'batman21');
    define('DB_HOST', 'localhost');
    $mydatabaseConnection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mydatabaseConnection->connect_error)
    {
        die("Database selection failed.  : $mydatabaseConnection->connect_error");    
    }
?>
