<?php
ob_start();
session_start();
require_once 'dbconnect.php';

//if logged in, redirect to dashboard
if( isset($_SESSION['user'])!="" ){
 header("Location: dashboard.php");
}

if(isset($_POST['submit'])) {

 $email = strip_tags(trim($_POST['email']));
 $upass = strip_tags(trim($_POST['pass']));
 $ucpass = strip_tags(trim($_POST['cpass']));
 $fname = strip_tags(trim($_POST['firstname']));
 $lname = strip_tags(trim($_POST['lastname']));
 $event1 = strip_tags(trim($_POST['event1']));
 $event2 = strip_tags(trim($_POST['event2']));
 $event3 = strip_tags(trim($_POST['event3']));

 // password encrypt using SHA256();
 $password = hash('sha256', $upass);

 // check email exist or not
 $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
 $result = mysql_query($query);

 $count = mysql_num_rows($result);

 $error = false;

 if (empty($email) || empty($upass) || empty($fname) || empty($lname) || empty($event1) || empty($event2) || empty($event3)){
   $error = true;
   $errMSG = "You must complete all fields.";
 }

 if ($upass !== $ucpass){
   $error = true;
   $errMSG = "Passwords do not match.";
 }

 if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
    $error = true;
   $errMSG = "Please enter valid email address.";
 }
 if ($count == 1){
    $error = true;
   $errMSG = "Email already in use.";
 }

  if(strlen($upass) < 6) {
     $error = true;
   $errMSG = "Password must have atleast 6 characters.";
  }

 if ($event1 == $event2 || $event2 == $event3 || $event1 == $event3){
     $error = true;
      $errMSG = "Event choices must be different";
  }

 if (!$error) {

    $query = "INSERT INTO users(userFName, userLName, userEmail, userPass, userEvent1, userEvent2, userEvent3) VALUES('$fname', '$lname', '$email', '$password', '$event1', '$event2', '$event3')";
    $res = mysql_query($query);

    $UID= $_SESSION['user'];

    $query2 = "INSERT INTO exams(userId) VALUES('$UID')";
    $res2 = mysql_query($query2);

    if ($res) {
      $successMSG = "Successfully registered, you may login now. Check your email for details.";

      // confirmation email body
      $emailbody = "Hello " . $fname . ",<br><br>Thank you for registering for IRHS DECA 2016/2017. Please confirm your details are as follows:<br><br>Event Choice 1. " . $event1 . "<br>Event Choice 2. " . $event2 . "<br>Event Choice 3. " . $event3 . "<br>Your email: " . $email . "<br>Password: " . $upass . "<br><br>You will be assigned an event by (date).";

      if (strpos($event1, "partner") !== false || strpos($event2, "partner") !== false || strpos($event3, "partner") !== false){
        $emailbody = $emailbody . "<br><br>One or more of the events you selected are partner events. Reply to this email if you would like to be paired with someone or the name of your selected partner.";
      }

      $emailbody = $emailbody . "<br><br>Please reply to this email or talk to one of the executives if there are any problems.<br><br>- The IRHS DECA team";

      // send confirmation email

      require 'PHPMailer/PHPMailerAutoload.php';

      $mail = new PHPMailer;

      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'irhsdeca2016@gmail.com';
      $mail->Password = 'DECA2016';
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;

      $mail->setFrom('irhsdeca2016@gmail.com', 'IRHS DECA');
      $mail->addAddress($email);               // recipient

      $mail->isHTML(true);           // Set email format to HTML

      $mail->Subject = 'Registration Confirmation';
      $mail->Body    = $emailbody;

      if(!$mail->send()) {
        $errMSG = 'Mailer Error: ' . $mail->ErrorInfo;
      }

    } else {
      $errMSG = "Something went wrong, try again later";
    }

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

  <div id="wrapper">

  <div id="mobile_menu">
    <img id="menu-logo" src="img/logo2.png" height="40" align="left">
    <img id="menu-bars" src="img/menu_bars.png" height="32" align="right">
  </div>

  <ul id="mobile_dropdown" style="display: none;">
      <li><a href='index.php'><span>Home</span></a></li>
      <li class="active"><a href='about.php'><span>About DECA</span></a></li>
      <li><a href='events.php'><span>Events</span></a></li>
      <li><a href='dashboard.php'><span>Dashboard</span></a></li>
      <li><a href='announcements.php'><span>Announcements</span></a></li>
      <li><a href='dates.php'><span>Schedules</span></a></li>
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
          <form id="reg" method='post'>

              <h4>Register for IRHS DECA 2016/2017</h4>

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
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="password" id="cpassword" name="cpass">
                  <label class="mdl-textfield__label" for="cpassword">Confirm Password</label>
              </div>

              <h5>Event choices: (Must be different)</h5>

                  <select id="event1" name="event1" class="select-style">
                      <option value="" disabled selected>1st Choice</option>

                  </select>

              <br/><br/>

                  <select id="event2" name="event2" class="select-style">
                      <option value="" disabled selected>2nd Choice</option>

                  </select>
              <br/><br/>

                  <select id="event3" name="event3" class="select-style">
                      <option value="" disabled selected>3rd Choice</option>

                  </select>

              <br/><br/>

              <input id="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit" value="Register">
              </input>
          </form>

                        <h5 style="color: red;"> <?php echo $errMSG ?> </h5>
                        <h5 style="color: green;" id="success"> <?php echo $successMSG ?> </h5>

      </div>
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
