<?php
ob_start();
session_start();
if( isset($_SESSION['user'])!="" ){
 header("Location: dashboard.php");
}
include_once 'dbconnect.php';

if(isset($_POST['submit'])) {

 $email = trim($_POST['email']);
 $upass = trim($_POST['pass']);
 $fname = trim($_POST['firstname']);
 $lname = trim($_POST['lastname']);
 $event1 = trim($_POST['event1']);
 $event2 = trim($_POST['event2']);
 $event3 = trim($_POST['event3']);

 $email = strip_tags($email);
 $upass = strip_tags($upass);
 $fname = strip_tags($fname);
 $lname = strip_tags($lname);
 $event1 = strip_tags($event1);
 $event2 = strip_tags($event2);
 $event3 = strip_tags($event3);

 // password encrypt using SHA256();
 $password = hash('sha256', $upass);

 // check email exist or not
 $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
 $result = mysql_query($query);

 $count = mysql_num_rows($result); // if email not found then proceed

 if ($count==0) {

  $query = "INSERT INTO users(userFName, userLName,userEmail,userPass, userEvent1, userEvent2, userEvent3) VALUES('$fname', '$lname', '$email','$password', '$event1', '$event2', '$event3')";
  $res = mysql_query($query);

  if ($res) {
   $errTyp = "success";
   $errMSG = "successfully registered, you may login now";
  } else {
   $errTyp = "danger";
   $errMSG = "Something went wrong, try again later...";
  }

 } else {
  $errTyp = "warning";
  $errMSG = "Sorry Email already in use ...";
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
          <li><a href='index.html'><span>Home</span></a></li>
          <li><a href='about.html'><span>About DECA</span></a></li>
          <li><a href='events.html'><span>Events</span></a></li>
          <li><a href='dashboard.html'><span>Dashboard</span></a></li>
          <li><a href='announcements.html'><span>Announcements</span></a></li>
          <li><a href='dates.html'><span>Schedules</span></a></li>
          <li class='active last'><a href='register.html'><span>Register</span></a></li>
      </ul>
  </div>
  </br>

    <div class="content">
        <form id="reg" action='php/register.php' method='post'>

            <h4>Register for IRHS DECA 2016/2017</h4>


        <?php
               if ( isset($errMSG) ) {
        ?>
                <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
                  <?php echo $errMSG; ?>
                   </div>
                   <?php
                 }
            ?>

            <h5>Personal Information:</h5>
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

            <h5>Event choices:</h5>

                <select id="event1" name="event1" class="select-style">
                    <option value="" disabled selected>1st Choice</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>

            <br/><br/>

                <select id="event2" name="event2" class="select-style">
                    <option value="" disabled selected>2nd Choice</option>
                    <option value="1">Option 4</option>
                    <option value="2">Option 5</option>
                    <option value="3">Option 6</option>
                </select>
            <br/><br/>

                <select id="event3" name="event3" class="select-style">
                    <option value="" disabled selected>3rd Choice</option>
                    <option value="1">Option 7</option>
                    <option value="2">Option 8</option>
                    <option value="3">Option 9</option>
                </select>

            <br/><br/>



            <input id="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit" value="Register">
            </input>
        </form>

    </div>
    <div class="footer">
        <img id="altlogo" src="img/logo_alt.png" width="100" align="left" />
        <img id="fbimg" src="img/facebook-box.png" width="45" align="right" />
        <h6><a href="irhsdeca.com" style="color: white;"><u>irhsdeca.com</u></a></h6>
    </div>

</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>

</html>
