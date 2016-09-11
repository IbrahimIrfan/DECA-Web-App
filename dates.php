<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';


     $query = "DELETE FROM exams WHERE userId=0";
     $res = mysql_query($query);
?>

<html>

<head>
<title> IRHS DECA </title>

<link rel="icon" href="img/favicon.ico" sizes="16x16">
<!-- Add jQuery library -->
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/cssmenu/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css">

<link rel="stylesheet" type="text/css" href="css/main.css"></link>

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
          <li class='active'><a href='dates.php'><span>Schedules</span></a></li>
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
<h4><?php if ($res2) { echo "done exams"; } ?></h4>

  <h4>Meeting Schedule</h4>
    <table class="mdl-data-table mdl-js-data-table" id="meetings" width="100%">
      <thead id="table-heading">
        <tr>
            <td witdh="42%">Cluster</td><td width="28%">Day of Week</td><td width="25%">Executives</td>
        </tr>
      </thead>
      <tbody>
      <tr>  <td>Principles</td><td>TBD</td><td>Ibrahim and Laura</td> </tr>
      <tr>    <td>Finance</td><td>TBD</td><td>Jessica and Ezaan</td>
      <tr>      <td>Marketing (Group 1)</td><td>TBD</td><td>Aazib and Melissa</td></tr>
  <tr>            <td>Marketing (Group 2)</td><td>TBD</td><td>Asdaq and Sophie</td></tr>
    <tr>            <td>Business Admin</td><td>TBD</td><td>Natania and Jennifer</td></tr>
      <tr>            <td>Hospitality</td><td>TBD</td><td>Amy and Victoria</td></tr>
      </tbody>
    </table>

  <div class="regionals">
    <h4 style="padding-left: 15px;">Regionals</h4>
    <img src="img/location.png" align="left" width="50"/>
    <h5 style="margin-top: 30px;">Hamilton Convention Centre</h5><br/>
    <img src="img/date.png" align="left" width="50"/>
    <h5 style="margin-top: 20px;">Exams: Oct 31, Case Studies: Nov 8</h5><br/>
    <img src="img/money.png" align="left" height="50"/>
    <h5 style="margin-top: 15px;">$</h5><br/>
  </div>

  <div class="provincials">
    <h4 style="padding-left: 15px;">Provincials</h4>
    <img src="img/location.png" align="left" width="50"/>
    <h5 style="margin-top: 30px;">Toronto Sheraton Centre</h5><br/>
    <img src="img/date.png" align="left" width="50"/>
    <h5 style="margin-top: 20px;">February 9-11, 2017</h5><br/>
    <img src="img/money.png" align="left" height="50"/>
    <h5 style="margin-top: 15px;">$</h5><br/>
  </div>

  <div class="icdc">
      <h4 style="padding-left: 15px;">ICDC</h4>
      <img src="img/location.png" align="left" width="50"/>
      <h5 style="margin-top: 30px;">Anaheim, California</h5><br/>
      <img src="img/date.png" align="left" width="50"/>
      <h5 style="margin-top: 20px;">April 24 - May 1, 2017</h5><br/>
      <img src="img/money.png" align="left" height="50"/>
      <h5 style="margin-top: 15px;">$</h5><br/>
  </div>



  </div>


  <div class="footer">
    <img id="altlogo" src="img/logo_alt.png" align="left"/>
    <img id="fbimg" src="img/facebook-box.png" align="right"/>
  <h6><a href="http://www.irhsdeca.com" style="color: white;">irhsdeca.com</a></h6>
  </div>
</div>
  </body>

  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  <script src="js/dates.js" type="text/javascript"></script>

  <script type="text/javascript" src="js/menu.js"></script>


  </html>
