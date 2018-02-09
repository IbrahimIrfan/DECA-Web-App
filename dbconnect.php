<?php
	// get the db values
	$json = file_get_contents('http://www.irhsdeca.xyz/config.json');
	$details = json_decode($json, true);

	// extract the details
	$host = $details["dbhost"];
	$user = $details["dbuser"];
	$pass = $details["dbpass"];
	$name = $details["dbname"];

	// connect to db and error check
	$conn = mysql_connect($host,$user,$pass);
	$dbcon = mysql_select_db($name);

	if (!$conn) {
		die("Connection failed : " . mysql_error());
	}
	if (!$dbcon) {
		die("Database Connection failed : " . mysql_error());
	}

	// set the timeout time to 120min (2hrs)
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 7200)) {
		session_unset();     // unset $_SESSION variable for the run-time
		session_destroy();   // destroy session data in storage
	}

	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>
