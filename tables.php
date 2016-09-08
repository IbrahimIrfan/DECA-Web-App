<?php


  $json = file_get_contents('http://www.irhsdeca.com/config.json');
  $details = json_decode($json, true);

 $host = $details["dbhost"];
 $user = $details["dbuser"];
 $pass = $details["dbpass"];
 $name = $details["dbname"];

 $conn = mysql_connect($host,$user,$pass);
 $dbcon = mysql_select_db($name);

$sql = "CREATE TABLE exams (".
"userId int(11) NOT NULL,".
"cluster varchar(255) NOT NULL,".
"score_1 int(11) NOT NULL,".
"score_2 int(11) NOT NULL,".
"score_3 int(11) NOT NULL,".
"score_4 int(11) NOT NULL,".
"score_5 int(11) NOT NULL,".
"score_6 int(11) NOT NULL,".
"score_7 int(11) NOT NULL,".
"score_8 int(11) NOT NULL,".
"score_9 int(11) NOT NULL,".
"score_10 int(11) NOT NULL,".
"score_11 int(11) NOT NULL,".
"score_12 int(11) NOT NULL,".
"score_13 int(11) NOT NULL,".
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
