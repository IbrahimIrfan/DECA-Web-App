<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';

 //if already logged in, redirect to dashboard
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: dashboard.php");
  exit;
 }

 if( isset($_POST['btn-login']) ) {
  $email = strip_tags(trim($_POST['email']));
  $upass = strip_tags(trim($_POST['pass']));

  $password = hash('sha256', $upass); // password hashing using SHA256

  $res=mysql_query("SELECT userId, userPass FROM users WHERE userEmail='$email'");

  $row=mysql_fetch_array($res);

  $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row

  if( $count == 1 && $row['userPass']==$password ) {
   $_SESSION['user'] = $row['userId'];
   header("Location: dashboard.php");
  } else {
   $errMSG = "Wrong Credentials, try again. If you forgot your password, check the confirmation email you recieved when you registered.";
  }
 }
?>
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
    <div class="footer">
        <img id="altlogo" src="img/logo_alt.png" width="100" align="left" />
        <img id="fbimg" src="img/facebook-box.png" width="45" align="right" />
        <h6><a href="http://www.irhsdeca.com" style="color: white;"><u>irhsdeca.com</u></a></h6>
    </div>

</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

</html>
