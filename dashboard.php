<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';

 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
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
            <li class="active"><a href='dashboard.html'><span>Dashboard</span></a></li>
            <li><a href='announcements.html'><span>Announcements</span></a></li>
            <li><a href='dates.html'><span>Schedules</span></a></li>
            <li class='last'><a href='register.html'><span>Register</span></a></li>
        </ul>
    </div>
    </br>

    <br/>

    <div class="content">
      <div class= "profile">
        <img src="img/avatar.png" align="left" height="120"/>
        <h3><?php echo $userRow['userFName']; echo $userRow['userLName'] ?> /h3>
        <h5><a href="php/logout.php?logout">Logout</a></h5>
</div>

        <br/>
        <br/>
        <div id="homework">
        <h4>Your Weekly Homework:</h4><img id="complete" src="img/complete.png" align="right" height="35" />
        <h5 id="exam_link"><u><a href="exam_example.html" style="color: black;">Finance Exam 2012</a></u></h5>
      </div>

        <br/>
        <br/>
        <div class="announce">
            <h4>Cluster-Wide Announcements:</h4>
            <!-- Three Line List with secondary info and action -->
            <style>
                .demo-list-three {
                    width: 650px;
                }
            </style>

            <ul class="demo-list-three mdl-list">
                <li class="mdl-list__item mdl-list__item--three-line">
                    <span class="mdl-list__item-primary-content">
      <img src="img/announce.png" height="50" align="left" style="margin-right: 10px;"/>
      <span>Test</span>
                    <span class="mdl-list__item-text-body">
        Test test test test test test test test test test test test test test.
      </span>
                    </span>
                </li>
                <li class="mdl-list__item mdl-list__item--three-line">
                    <span class="mdl-list__item-primary-content">
      <img src="img/assess.png" height="50" align="left" style="margin-right: 10px;"/>
      <span>Test</span>
                    <span class="mdl-list__item-text-body">
          Test test test test test test test test test test test test test test.
      </span>
                    </span>
                </li>
                <li class="mdl-list__item mdl-list__item--three-line">
                    <span class="mdl-list__item-primary-content">
      <img src="img/assign.png" height="50" align="left" style="margin-right: 10px;"/>
      <span>Test</span>
                    <span class="mdl-list__item-text-body">
          Test test test test test test test test test test test test test test.
      </span>
                    </span>
                </li>
            </ul>
        </div>

    </div>
    <div class="footer">
        <img id="altlogo" src="img/logo_alt.png" width="100" align="left" />
        <img id="fbimg" src="img/facebook-box.png" width="45" align="right" />
        <h6><a href="irhsdeca.com" style="color: white;">irhsdeca.com</a></h6>
    </div>

</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>


</html>
