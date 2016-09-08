<?php
  $score = $_POST["score"];
  echo $score;
  $query = "INSERT INTO exams(userId, score_1, cluster) VALUES('3', '$score', 'Principles')";
  $res = mysql_query($query);
  echo $res;
?>
