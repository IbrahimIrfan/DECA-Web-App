<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';

  $score = $_POST["score"];
  $query = "DELETE FROM exams";
  
  //$query = "INSERT INTO exams(userId, score_1, cluster) VALUES('$_SESSION['user']', '$score', 'Principles')";
  $res = mysql_query($query);
?>
