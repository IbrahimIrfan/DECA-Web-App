<?php
ob_start();
session_start();
require_once 'dbconnect.php';

//if logged in, redirect to dashboard
if( isset($_SESSION['user'])!="" ){
	header("Location: dashboard.php");
}


if(isset($_POST['submit'])) {
	// get and sanitize the form data
	$email =  mysql_real_escape_string(strip_tags(trim($_POST['email']))));
	$upass =  mysql_real_escape_string(strip_tags(trim($_POST['pass'])));
	$ucpass =  mysql_real_escape_string(strip_tags(trim($_POST['cpass'])));
	$fname =  mysql_real_escape_string(strip_tags(trim($_POST['firstname'])));
	$lname =  mysql_real_escape_string(strip_tags(trim($_POST['lastname'])));

	// password encrypt using SHA256()
	$password = hash('sha256', $upass);

	// check email exists or not
	$query = "SELECT userEmail FROM users WHERE userEmail='$email'";
	$result = mysql_query($query);

	$count = mysql_num_rows($result);

	$error = false;

	// empty field handling
	if (empty($email) || empty($upass) || empty($fname) || empty($lname)){
		$error = true;
		$errMSG = "You must complete all fields.";
	}

	// passwords don't match
	if ($upass !== $ucpass){
		$error = true;
		$errMSG = "Passwords do not match.";
	}

	// email validation
	if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
		$error = true;
		$errMSG = "Please enter valid email address.";
	}

	// email in use
	if ($count == 1){
		$error = true;
		$errMSG = "Email already in use.";
	}

	// password at least length 6
	if(strlen($upass) < 6) {
		$error = true;
		$errMSG = "Password must have atleast 6 characters.";
	}

	if (!$error) {
		// no error, so insert into db
		$query = "INSERT INTO users(userFName, userLName, userEmail, userPass) VALUES('$fname', '$lname', '$email', '$password')";
		$res = mysql_query($query);

		$getUID=mysql_query("SELECT userId FROM users WHERE userEmail='$email'");
		$getUIDrow=mysql_fetch_array($getUID);

		$UID = $getUIDrow['userId'];

		// add to exams db too
		$query2 = "INSERT INTO exams(userId) VALUES('$UID')";
		$res2 = mysql_query($query2);

	} else {
		$errMSG = "Something went wrong, try again later";
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

<!-- Mobile Menu -->
  <div id="mobile_menu">
	<img id="menu-logo" src="img/logo2.png" height="40" align="left">
	<img id="menu-bars" src="img/menu_bars.png" height="32" align="right">
  </div>

<!-- Mobile Dropdown -->
  <ul id="mobile_dropdown" style="display: none;">
	  <li><a href='index.php'><span>Home</span></a></li>
	  <li class="active"><a href='about.php'><span>About DECA</span></a></li>
	  <li><a href='events.php'><span>Events</span></a></li>
	  <li><a href='dashboard.php'><span>Dashboard</span></a></li>
	  <li><a href='announcements.php'><span>Announcements</span></a></li>
	  <li><a href='dates.php'><span>Schedules</span></a></li>

	<!-- if logged in show corresponding menus-->
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
		  <li class='active'><a href='register.php'><span>Register</span></a></li>
		  <li class='last'><a href='login.php'><span>Login</span></a></li>
	  </ul>
  </div>
  </br>

	  <div class="content">

		<!-- error msg -->
		<h5 style="color: red;"> <?php echo $errMSG ?> </h5>
		<h5 style="color: green;" id="success"> <?php echo $successMSG ?> </h5>

<!-- registration people -->
<form id="reg" method='post'>

<h4>Register for IRHS DECA 2016/2017</h4>

<h5>Personal Information:</h5>

<!-- form -->
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="firstname" name="firstname">
	<label class="mdl-textfield__label" for="firstname">First Name</label>
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="lastname" name="lastname">
	<label class="mdl-textfield__label" for="lastname">Last Name</label>
</div>

</br>
</br>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="email" name="email">
	<label class="mdl-textfield__label" for="email">Email</label>
</div>

</br>
</br>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="password" id="password" name="pass">
	<label class="mdl-textfield__label" for="password">Password</label>
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="password" id="cpassword" name="cpass">
	<label class="mdl-textfield__label" for="cpassword">Confirm Password</label>
</div>
<br>

<input id="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit" value="Register">
</input>
</form>

	  </div>

	<!-- footer -->
	  <div class="footer">
		  <img id="altlogo" src="img/logo_alt.png" align="left" />
		  <img id="fbimg" src="img/facebook-box.png" align="right" />
		  <h6><a href="http://www.irhsdeca.com" style="color: white;"><u>irhsdeca.com</u></a></h6>
	  </div>
</div>
  </body>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  <script type="text/javascript" src="js/events.js"></script>
  <script type="text/javascript" src="js/menu.js"></script>

  </html>
