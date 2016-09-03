<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';

// redirect to login if not logged in
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
 // select logged in users detail
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
          <li><a href='index.php'><span>Home</span></a></li>
          <li><a href='about.php'><span>About DECA</span></a></li>
          <li><a href='events.php'><span>Events</span></a></li>
          <li class="active"><a href='dashboard.php'><span>Dashboard</span></a></li>
          <li><a href='announcements.php'><span>Announcements</span></a></li>
          <li><a href='dates.php'><span>Schedules</span></a></li>
             <li><a href='exams.php'><span>Exams</span></a></li>
          <li class='last'><a href='logout.php?logout'><span>Logout</span></a></li>
      </ul>
  </div>
    </br>

    <br/>



    <div class="content">
      <div class= "profile">
        <img src="img/avatar.png" align="left" height="120"/>
        <h3><?php echo $userRow['userFName']; echo " "; echo $userRow['userLName'] ?> </h3>
        <h4 id="event_assigned_code"></h4>
      </div>

        <br/>
        <br/>
        <div id="homework">
        <h4>Your Weekly Homework:</h4><img id="complete" src="img/complete.png" align="right" height="35" />
        <h5 id="exam_link"><u><a href="/Principles_1_Whole_Master.php" style="color: black;"></a></u></h5>
      </div>

        <br/>
        <br/>


              <script type="text/javascript">
            //  var user_event_assigned = "<?php echo $_SESSION['userEventAssigned'] ?>";
              var user_event_1 = "<?php echo $userRow['userEvent1']; ?>";
              var user_event_code = user_event_1.substring(user_event_1.lastIndexOf("(")+1,user_event_1.lastIndexOf(")"));

              document.getElementById('event_assigned_code').innerHTML = user_event_code;

              $('#exam_link u a').html(user_event_code + " Exam");
              </script>

            <h4>Cluster-Wide Announcements:</h4>


            <!--ANNOUNCEMENTS-->
            <div class="announce">
            <h4 id="ann-title">Title</h4>
            <h5 id="ann-body">Body</h5>
            </div>
            <div class="announce">
            <h4 id="ann-title">Title</h4>
            <h5 id="ann-body">Body</h5>
            </div>
            <div class="announce">
            <h4 id="ann-title">Title</h4>
            <h5 id="ann-body">Body</h5>
            </div>
            <div class="announce">
            <h4 id="ann-title">Title</h4>
            <h5 id="ann-body">Body</h5>
            </div>

    <div class="footer">
        <img id="altlogo" src="img/logo_alt.png" width="100" align="left" />
        <img id="fbimg" src="img/facebook-box.png" width="45" align="right" />
        <h6><a href="http://www.irhsdeca.com" style="color: white;">irhsdeca.com</a></h6>
    </div>

</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>


</html>
