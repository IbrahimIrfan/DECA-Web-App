<?php
  $json = file_get_contents('http://www.irhsdeca.com/config.json');
  $details = json_decode($json, true);

 $host = $details["dbhost"];
 $user = $details["dbuser"];
 $pass = $details["dbpass"];
 $name = $details["dbname"];

 $conn = mysql_connect($host,$user,$pass);
 $dbcon = mysql_select_db($name);

 $sql = "CREATE TABLE hackw2 (".
  "subId int(11) NOT NULL AUTO_INCREMENT,".
  "uploaderName varchar(60) NOT NULL,".
  "song varchar(60) NOT NULL, ".
  "PRIMARY KEY (subId) ".
 ") AUTO_INCREMENT=1;";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
