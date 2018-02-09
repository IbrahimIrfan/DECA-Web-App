<?php
	session_start();

	// if user is not logged in, redirect to login
	// if login is not properly requested, redirect to dashboard
	if (!isset($_SESSION['user'])) {
		header("Location: login.php");
	} else if(isset($_SESSION['user'])!="") {
		header("Location: dashboard.php");
	}

	// if login is requested, destroy session and redirect to login
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("Location: login.php");
		exit;
	}
?>
