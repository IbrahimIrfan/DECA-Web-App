<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';

  $score = $_POST["score"];
  $UID = $_SESSION['user'];
  echo $score;
  echo $UID;
  $query = "INSERT INTO exams(score_2, cluster) VALUES('$score', 'Principles') WHERE userId=2";
  $res = mysql_query($query);
?>
