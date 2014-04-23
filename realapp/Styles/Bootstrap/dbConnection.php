<?php

 # Selects the database

 DEFINE ('DB_USER', 'joey');
 DEFINE ('DB_PASSWORD', 'batman21');
 DEFINE ('DB_HOST', 'localhost');
 DEFINE ('DB_NAME', 'musiciantree');

 $dbc_accounts = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not       connect to MySQL');

 @mysql_select_db (DB_NAME) OR die ('Could not select the database');

 // Function for escaping data
 function escape_data ($data) 
 {
     global $dbc_accounts;
     if (ini_get('magic_quotes_gpc')) 
     {
         $data = stripslashes($data);
     }
     return mysql_real_escape_string(trim($data), $dbc_accounts);
 }

?>
