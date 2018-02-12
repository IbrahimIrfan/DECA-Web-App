<?php
ob_start();
session_start();
require_once 'dbconnect.php';

//if already logged in, redirect to dashboard
if ( isset($_SESSION['user'])!="" ) {
	header("Location: dashboard.php");
	exit;
}

// if if the user presses login
if( isset($_POST['btn-login']) ) {
	// get and sanitize form data
	$email = mysql_real_escape_string(strtoupper(strip_tags(trim($_POST['email']))));
	$upass =  mysql_real_escape_string(strip_tags(trim($_POST['pass'])));
	$salt = mysql_query("SELECT salt FROM details");

	$password = hash('sha256', $upass . $salt); // password hashing using SHA256

	$res=mysql_query("SELECT userId, userPass FROM users WHERE upper(userEmail)='$email'");

	$row=mysql_fetch_array($res);

	$count = mysql_num_rows($res); // if uname/pass correct it returns 1

	// if user exists and password matches, set session id and redirect to dashboard
	if( $count == 1 && $row['userPass']==$password ) {
		$_SESSION['user'] = $row['userId'];
		header("Location: dashboard.php");
	} else {
		$errMSG = "Wrong Credentials, try again.";
	}
}
?>


<!--
/$$$$$$ /$$$$$$$  /$$$$$$$   /$$$$$$  /$$   /$$ /$$$$$$ /$$      /$$       /$$$$$$ /$$$$$$$  /$$$$$$$$ /$$$$$$  /$$   /$$
|_  $$_/| $$__  $$| $$__  $$ /$$__  $$| $$  | $$|_  $$_/| $$$    /$$$      |_  $$_/| $$__  $$| $$_____//$$__  $$| $$$ | $$
 | $$  | $$  \ $$| $$  \ $$| $$  \ $$| $$  | $$  | $$  | $$$$  /$$$$        | $$  | $$  \ $$| $$     | $$  \ $$| $$$$| $$
 | $$  | $$$$$$$ | $$$$$$$/| $$$$$$$$| $$$$$$$$  | $$  | $$ $$/$$ $$        | $$  | $$$$$$$/| $$$$$  | $$$$$$$$| $$ $$ $$
 | $$  | $$__  $$| $$__  $$| $$__  $$| $$__  $$  | $$  | $$  $$$| $$        | $$  | $$__  $$| $$__/  | $$__  $$| $$  $$$$
 | $$  | $$  \ $$| $$  \ $$| $$  | $$| $$  | $$  | $$  | $$\  $ | $$        | $$  | $$  \ $$| $$     | $$  | $$| $$\  $$$
/$$$$$$| $$$$$$$/| $$  | $$| $$  | $$| $$  | $$ /$$$$$$| $$ \/  | $$       /$$$$$$| $$  | $$| $$     | $$  | $$| $$ \  $$
|______/|_______/ |__/  |__/|__/  |__/|__/  |__/|______/|__/     |__/      |______/|__/  |__/|__/     |__/  |__/|__/  \__/



/$$$$$$ /$$$$$$$  /$$   /$$  /$$$$$$        /$$$$$$$  /$$$$$$$$  /$$$$$$   /$$$$$$
|_  $$_/| $$__  $$| $$  | $$ /$$__  $$      | $$__  $$| $$_____/ /$$__  $$ /$$__  $$
 | $$  | $$  \ $$| $$  | $$| $$  \__/      | $$  \ $$| $$      | $$  \__/| $$  \ $$
 | $$  | $$$$$$$/| $$$$$$$$|  $$$$$$       | $$  | $$| $$$$$   | $$      | $$$$$$$$
 | $$  | $$__  $$| $$__  $$ \____  $$      | $$  | $$| $$__/   | $$      | $$__  $$
 | $$  | $$  \ $$| $$  | $$ /$$  \ $$      | $$  | $$| $$      | $$    $$| $$  | $$
/$$$$$$| $$  | $$| $$  | $$|  $$$$$$/      | $$$$$$$/| $$$$$$$$|  $$$$$$/| $$  | $$
|______/|__/  |__/|__/  |__/ \______/       |_______/ |________/ \______/ |__/  |__/


-->
<html>

<head>

	<title> IRHS DECA </title>
	<!-- Add jQuery library -->
	<link rel="icon" href="img/favicon.ico" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/main.css"></link>
	<meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/cssmenu/styles.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css">

</head>

<body>

  <div id="wrapper">

	<!-- Mobile menu -->
  <div id="mobile_menu">
	<img id="menu-logo" src="img/logo2.png" height="40" align="left">
	<img id="menu-bars" src="img/menu_bars.png" height="32" align="right">
  </div>

	<!-- Mobile dropdown -->
  <ul id="mobile_dropdown" style="display: none;">
	  <li><a href='index.php'><span>Home</span></a></li>
	  <li class="active"><a href='about.php'><span>About DECA</span></a></li>
	  <li><a href='events.php'><span>Events</span></a></li>
	  <li><a href='dashboard.php'><span>Dashboard</span></a></li>
	  <li><a href='announcements.php'><span>Announcements</span></a></li>
	  <li><a href='dates.php'><span>Schedules</span></a></li>

	<!-- Set menu based on login session -->
	  <?php if( !isset($_SESSION['user']) ) { ?>
		 <li><a href='register.php'><span>Register</span></a></li>
		 <li class='last'><a href='login.php'><span>Login</span></a></li>
		 <?php } else { ?>
			<li><a href='exams.php'><span>Exams</span></a></li>
		   <li class='last'><a href='logout.php?logout'><span>Logout</span></a></li>
	<?php
		}
	?>
  </ul>


<!-- desktop menu -->
  <div id='cssmenu'>
	  <ul>
		  <li><a href='index.php'><span>Home</span></a></li>
		  <li><a href='about.php'><span>About DECA</span></a></li>
		  <li><a href='events.php'><span>Events</span></a></li>
		  <li><a href='dashboard.php'><span>Dashboard</span></a></li>
		  <li><a href='announcements.php'><span>Announcements</span></a></li>
		  <li><a href='dates.php'><span>Schedules</span></a></li>
		  <li><a href='register.php'><span>Register</span></a></li>
		  <li class='active last'><a href='login.php'><span>Login</span></a></li>
	  </ul>
  </div>
  </br>

	<div class="content">
		<!-- Login form -->
		<form id="login" method='post'>

			<h4>Login</h4>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="email" name="email">
				<label class="mdl-textfield__label" for="email">Email</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="password" id="pass" name="pass">
				<label class="mdl-textfield__label" for="lastname">Password</label>
			</div>
			</br>
			</br>

			<h5 style="color: red;"><?php echo $errMSG ?></h5>

			<input id="submit" name="btn-login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit" value="Login">
			</input>
		</form>

	</div>

	 <!-- footer -->
	<div class="footer">
		<img id="altlogo" src="img/logo_alt.png" align="left" />
		<img id="fbimg" src="img/facebook-box.png" align="right" />
		<h6><a href="http://www.ibrahimirfan.com" style="color: white;"><u>Ibrahim Irfan</u></a></h6>
	</div>
</div>
</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>

</html>
