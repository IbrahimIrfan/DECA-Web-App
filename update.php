<?php
ob_start();
session_start();
require_once 'dbconnect.php';

  $query = "DELETE FROM hackw2 WHERE uploaderName='Ode To Joy'";
 $res = mysql_query($query);
  if ($res) {
   echo "Done!";
 }else{
   echo mysql_error();
 }
 ?>
