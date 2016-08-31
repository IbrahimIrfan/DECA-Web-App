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
 $fname = strip_tags(trim($_POST['firstname']));
 $lname = strip_tags(trim($_POST['lastname']));
 $event1 = strip_tags(trim($_POST['event1']));
 $event2 = strip_tags(trim($_POST['event2']));
 $event3 = strip_tags(trim($_POST['event3']));

 // password encrypt using SHA256();
 $password = hash('sha256', $upass);

 // check email exist or not
 //$query = "SELECT userEmail FROM users WHERE userEmail='$email'";
 //$result = mysql_query($query);

 //$count = mysql_num_rows($result);
 $count = 1;

 if (empty($email) || empty($upass) || empty($fname) || empty($lname) || empty($event1) || empty($event2) || empty($event3)){
   $error = true;
   $errMSG = "You must complete all fields.";
 }

 if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
    $error = true;
   $errMSG = "Please enter valid email address.";
 } else if ($count != 0){
    $error = true;
   $errMSG = "Email already in use."
 }

  if(strlen($upass) < 6) {
     $error = true;
   $errMSG = "Password must have atleast 6 characters.";
  }

  if ($event1 == $event2 || $event2 == $event3 || $event1 == $event3){
     $error = true;
      $errMSG = "Event choices must be unique";
  }

 if (!$error) {

  //  $query = "INSERT INTO users(userFName, userLName, userEmail, userPass, userEvent1, userEvent2, userEvent3) VALUES('$fname', '$lname', '$email', '$password', '$event1', '$event2', '$event3')";
  //  $res = mysql_query($query);
$res = true;
    if ($res) {
      $errMSG = "Successfully registered, you may login now. Check your email for details.";

      // confirmation email body
      $emailbody = 'Hello ' . $fname . '.\nThank you for registering for IRHS DECA 2016/2017. Please confirm your event choices are as follows:\n1. ' . $event1 . '\n2. ' . $event2 . '\n3. ' . $event3 . '\nYour email: ' . $email . '\nPassword: ' . $upass . '\nYou will be assigned an event by (date).';

      if (str.pos($event1, 'partner') !== false || str.pos($event2, 'partner') !== false || str.pos($event3, 'partner') !== false){
        $emailbody = $emailbody . ' One or more of the events you selected are partner events. Reply to this email the name of your selected partner, or if you would like to be paired with someone.\n '
      }

      $emailbody = $emailbody . 'Please reply to this email if there are any problems.\n\n- The IRHS DECA team';

      // send confirmation email

      require 'PHPMailer/PHPMailerAutoload.php';

      $mail = new PHPMailer;

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'irhsdeca2016@gmail.com';                 // SMTP username
      $mail->Password = 'DECA2016';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->setFrom('irhsdeca2016@gmail.com', 'Mailer');
      $mail->addAddress($email);               // recipient

      $mail->isHTML(true);           // Set email format to HTML

      $mail->Subject = 'IRHS DECA Registration Confirmation';
      $mail->Body    = $emailbody

      if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
        echo 'Message has been sent';
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
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="password" id="password" name="pass">
                  <label class="mdl-textfield__label" for="password">Password</label>
              </div>

              <h5>Event choices: (Must be unique)</h5>

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

<h5 style="color: red;"> <?php echo $errMSG ?> </h5>

              <input id="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit" value="Register">
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
  <script type="text/javascript" src="js/events.js"></script>

  </html>
