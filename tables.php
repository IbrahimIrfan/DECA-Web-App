<?php


  $json = file_get_contents('http://www.irhsdeca.com/config.json');
  $details = json_decode($json, true);

 $host = $details["dbhost"];
 $user = $details["dbuser"];
 $pass = $details["dbpass"];
 $name = $details["dbname"];

 $conn = mysql_connect($host,$user,$pass);
 $dbcon = mysql_select_db($name);

$sql = "CREATE TABLE announcements (".
"announceId int(11) NOT NULL AUTO_INCREMENT,".
"title varchar(255) NOT NULL,".
"body text NOT NULL,".
"cluster varchar(255) NOT NULL,".
"datePosted TIMESTAMP DEFAULT CURRENT_TIMESTAMP,".
"PRIMARY KEY (announceId)".
");";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
