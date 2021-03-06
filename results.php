<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
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

	<link rel="icon" href="img/favicon.ico" sizes="16x16">
	<!-- Add jQuery library -->
	<link rel="stylesheet" type="text/css" href="css/main.css"></link>
	<meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/cssmenu/styles.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css">
	<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

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

	<!-- Set menu based on login -->
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


<!-- Desktop Menu -->
  <div id='cssmenu'>
	  <ul>
		  <li><a href='index.php'><span>Home</span></a></li>
		  <li><a href='about.php'><span>About DECA</span></a></li>
		  <li class="active"><a href='events.php'><span>Events</span></a></li>
		  <li><a href='dashboard.php'><span>Dashboard</span></a></li>
		  <li><a href='announcements.php'><span>Announcements</span></a></li>
		  <li><a href='dates.php'><span>Schedules</span></a></li>
		  
		<!-- Set menu based on login -->
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
  </div>
	</br>


	<div class="content">
	<!-- results -->
	  <h5>2015 DECA Hamilton Regional Results:</h5>
	  <br>
	  <br>
	  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	  <input class="mdl-textfield__input" type="text" id="eventInput">
	  <label class="mdl-textfield__label">Event Code</label>
	  </div>

	  <input id="submitEvent" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit" value="Go">
	  </input>

	  <div id='resultsHeading'>Top scores (ordered by overall score)</div>
	  <table id='resultsTable' class="mdl-data-table mdl-js-data-table" width='100%'>
		<tr><td>Overall</td><td>Exam</td><td>Case Study</td></tr>
	  </table>

</div>
</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<script type="text/javascript" src="js/results.js"></script>

</html>
