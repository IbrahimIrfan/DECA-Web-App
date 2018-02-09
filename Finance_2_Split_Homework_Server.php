<?php 
  ob_start(); 
  session_start(); 
  require_once 'dbconnect.php'; 

  // get score and user id
  $score = mysql_real_escape_string($_POST["score"]); 
  $UID = mysql_real_escape_string($_POST["user"]); 
  $query = "UPDATE exams SET score_6='$score' WHERE userId=" . $UID;
  $res = mysql_query($query); 
?>
