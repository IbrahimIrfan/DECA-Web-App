<?php

  $json = file_get_contents('http://www.irhsdeca.com/config.json');
  $details = json_decode($json, true);

 $host = $details["dbhost"];
 $user = $details["dbuser"];
 $pass = $details["dbpass"];
 $name = $details["dbname"];

 $conn = mysql_connect($host,$user,$pass);
 $dbcon = mysql_select_db($name);

 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }

 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
}

?>
