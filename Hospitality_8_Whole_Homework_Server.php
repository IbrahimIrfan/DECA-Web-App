<?php ob_start(); session_start(); require_once 'dbconnect.php'; $score = $_POST["score"]; $UID = $_SESSION['user']; $query = "UPDATE exams SET score_8='$score', cluster='Hospitality' WHERE userId=".$UID;$res = mysql_query($query); ?>