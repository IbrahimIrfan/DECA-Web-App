<?php
//  ob_start();
//  session_start();
//  require_once 'dbconnect.php';

  $score = $_POST["score"];
  $query = "INSERT INTO exams(userId, score_1, cluster) VALUES('3', '$score', 'Principles')";
  $res = mysql_query($query);
?>
