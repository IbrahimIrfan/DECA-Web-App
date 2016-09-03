<?php


  $json = file_get_contents('http://www.irhsdeca.com/config.json');
  $details = json_decode($json, true);

 $host = $details["dbhost"];
 $user = $details["dbuser"];
 $pass = $details["dbpass"];
 $name = $details["dbname"];

 $conn = mysql_connect($host,$user,$pass);
 $dbcon = mysql_select_db($name);

$sql = "CREATE TABLE users (".
"userId int(11) NOT NULL AUTO_INCREMENT,".
"userFName varchar(60) NOT NULL,".
"userLName varchar(60) NOT NULL,".
"userEmail varchar(60) NOT NULL,".
"userPass varchar(255) NOT NULL,".
"userEvent1 varchar(255) NOT NULL,".
"userEvent2 varchar(255) NOT NULL,".
"userEvent3 varchar(255) NOT NULL,".
"userEventAssigned varchar(255),".
"PRIMARY KEY (userId)".
");";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
