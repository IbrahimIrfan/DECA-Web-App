<?php

 define('DBHOST', 'irhsdeca.com');
 define('DBUSER', '');
 define('DBPASS', '');
 define('DBNAME', 'members2016');

 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);

 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }

 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
}

?>
