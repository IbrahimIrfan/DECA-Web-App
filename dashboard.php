<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';

// redirect to login if not logged in
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }


  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=3 VALUES ('STDM')");

  /*
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
  $add_event = mysql_query("INSERT INTO users(userEventAssigned) WHERE userId=1 VALUES ('PBM')");
 */


 $deleteId = $_GET['delId'];
 if ($deleteId !== undefined){
   $delete_request = mysql_query('DELETE FROM announcements WHERE announceId='.$deleteId);
 }

 // select logged in users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);

$exec = false;

 if ($userRow["userEmail"] == "1ibrahimirfan@gmail.com" || $userRow["userEmail"] == "laurak8981@gmail.com"){
   $exec = true;
   $clusterManaging = "Principles";
 }elseif ($userRow["userEmail"] == "e.ulhaq@hotmail.com" || $userRow["userEmail"] == "jessica.meng0402@gmail.com"){
   $exec = true;
   $clusterManaging = "Finance";
 }elseif ($userRow["userEmail"] == "aazihassan18@gmail.com" || $userRow["userEmail"] == "missy92009@hotmail.com"){
   $exec = true;
   $clusterManaging = "Marketing-Teams";
 }elseif ($userRow["userEmail"] == "sohpeiwu@gmail.com" || $userRow["userEmail"] == "asdaq_paracha@hotmail.con"){
   $exec = true;
   $clusterManaging = "Marketing-Singles";
 }elseif ($userRow["userEmail"] == "amy.kim162@gmail.com" || $userRow["userEmail"] == "vswinhoe@gmail.com"){
   $exec = true;
   $clusterManaging = "Hospitality";
 }elseif ($userRow["userEmail"] == "nataniaolusanya@gmail.com" || $userRow["userEmail"] == "1zhengjen@hdsb.ca"){
   $exec = true;
   $clusterManaging = "Business-Admin";
 }

 if ($userRow["userEmail"] == "fisherji@hdsb.ca"){
   $admin = true;
   $clusterManaging = "N/A";
 }

 if ($userRow["userEventAssigned"] == "PBM" || $userRow["userEventAssigned"] == "PMK" ||$userRow["userEventAssigned"] == "PFN" || $userRow["userEventAssigned"] == "PHT"){
   $currentCluster = "Principles";
 } elseif ($userRow["userEventAssigned"] == "PFL" || $userRow["userEventAssigned"] == "ACT" ||$userRow["userEventAssigned"] == "FTDM" || $userRow["userEventAssigned"] == "BFS"){
   $currentCluster = "Finance";
 }elseif ($userRow["userEventAssigned"] == "BTDM" || $userRow["userEventAssigned"] == "MTDM" ||$userRow["userEventAssigned"] == "STDM"){
  $currentCluster = "Marketing-Teams";
}elseif ($userRow["userEventAssigned"] == "AAM"|| $userRow["userEventAssigned"] == "AASM"|| $userRow["userEventAssigned"] == "BSM"|| $userRow["userEventAssigned"] == "FMS"|| $userRow["userEventAssigned"] == "MCS"|| $userRow["userEventAssigned"] == "RMS"|| $userRow["userEventAssigned"] == "SEM"){
  $currentCluster = "Marketing-Singles";
}elseif ($userRow["userEventAssigned"] == "HLM" || $userRow["userEventAssigned"] == "QSRM" ||$userRow["userEventAssigned"] == "RFSM" || $userRow["userEventAssigned"] == "HTDM"|| $userRow["userEventAssigned"] == "TTDM"){
   $currentCluster = "Hospitality";
 }elseif ($userRow["userEventAssigned"] == "BLTDM" || $userRow["userEventAssigned"] == "HRM"){
   $currentCluster = "Business-Admin";
 }

 if ($currentCluster == "Principles"){
 $homework= "Principles_1_Whole_Homework.php";
 }elseif ($currentCluster == "Finance") {
   $homework= "Finance_1_Whole_Homework.php";
 }elseif ($currentCluster == "Business-Admin") {
   $homework= "Business-Admin_1_Whole_Homework.php";
 }elseif ($currentCluster == "Marketing-Teams" || $currentCluster == "Marketing-Singles") {
   $homework= "Marketing_1_Whole_Homework.php";
 }elseif ($currentCluster == "Hospitality") {
   $homework= "Hospitality_1_Whole_Homework.php";
 }

 $week = "score_1";

 $res_exam_check=mysql_query("SELECT * FROM exams WHERE userId=".$_SESSION['user']);
 $exam_check=mysql_fetch_array($res_exam_check);

 if ($exam_check[$week] !== "0"){
   $exam_status="img/complete.png";
 }else{
   $exam_status="img/incomplete.png";
 }

 if(isset($_POST['submit'])) {

  $title = strip_tags(trim($_POST['title']));
  $body = strip_tags(trim($_POST['body']));

  $error = false;

  if (empty($title) || empty($body)){
    $error = true;
    $msg = "You must complete all fields.";
  }

  if (!$error){
    $query = "INSERT INTO announcements(title, body, cluster) VALUES('$title', '$body', '$clusterManaging')";
    $res = mysql_query($query);
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
        <img src="img/avatar.png" align="left" height="140"/>
        <h3><?php echo $userRow['userFName']; echo " "; echo $userRow['userLName'] ?> </h3>
        <h4 id="event_assigned_code"></h4>
      </div>

        <br/>
        <div id="homework">
        <h4>Your Weekly Homework:</h4><img id="complete" src="<?php echo $exam_status; ?>" align="right" height="35" />
        <h5 id="exam_link"><u><a href='<?php echo $homework; ?>' style="color: black;"><?php echo $currentCluster; echo " Exam";?></a></u></h5>
      </div>

        <br/>

            <?php

            if ($add_event) {
              ?>
              <h4>Success</h4>
              <?php
            } else {
              ?>
              <h4><?php echo mysql_error($add_event); ?></h4>
              <?php
            }
            if ($exec || $admin) {
              ?>
              <h4>Current Registration Status:<div style="color: green; display: inline;"> <?php
               // select exams detail
               $res_users_abc=mysql_query("SELECT * FROM users");
              echo mysql_num_rows($res_users_abc);
              ?></div></h4>
              <table class="mdl-data-table mdl-js-data-table" id="exam_scores"><thead>
              <tr><td width="100%">Name</td><td>Event</td></tr></thead><tbody>
                <?php
                            while ($abcd = mysql_fetch_array($res_users_abc, MYSQL_ASSOC)) {
                                ?>
                                <tr>
                                <td><?php
                                echo $abcd["userId"];
                                echo " "; echo $abcd['userFName']; echo " "; echo $abcd['userLName']; ?></td>
                                <td><?php echo $abcd['userEventAssigned'];  ?></td></tr>
                                <?php
                              }
                              mysql_free_result($res);
                              ?>
                            </tbody>
                            </table>

              <h4> Exam Scores for <?php echo $clusterManaging; ?><div style="color: green; display: inline;"> <?php
                 // select exams detail
                 $res_users_abcfejkfenfe=mysql_query("SELECT * FROM exams");
                echo mysql_num_rows($res_users_abcfejkfenfe);
                ?></h4>
              <table class="mdl-data-table mdl-js-data-table" id="exam_scores"><thead>
              <tr><td width="100%">User</td><td>Week 1</td><td>Week 2</td><td>Week 3</td><td>Week 4</td><td>Week 5</td><td>Week 6</td><td>Week 7</td><td>Week 8</td><td>Week 9</td><td>Week 10</td><td>Week 11</td><td>Week 12</td><td>Week 13</td></tr></thead><tbody>
              <?php

               // select exams detail
               $res=mysql_query("SELECT * FROM exams");
              // $res=mysql_query("SELECT * FROM exams WHERE cluster='".$clusterManaging."'");
                          while ($abc = mysql_fetch_array($res, MYSQL_ASSOC)) {
                              ?>
                              <tr>
                              <td>
                                <?php
                            $res_users = mysql_query("SELECT * FROM users WHERE userId=". $abc["userId"]);
                            $user_exams=mysql_fetch_array($res_users);
                              echo $user_exams["userFName"];
                              echo " ";
                              echo $user_exams["userLName"]; ?></td>
                              <td><?php
                              if ($abc["score_1"] !== "0"){
                                 echo $abc["score_1"]; echo "%";
                               }else{
                                 echo "-";
                               } ?></td>
                            <td><?php
                            if ($abc["score_2"] !== "0"){
                               echo $abc["score_2"]; echo "%";
                             }else{
                               echo "-";
                             }
                             ?></td>
                          <td><?php
                          if ($abc["score_3"] !== "0"){
                             echo $abc["score_3"]; echo "%";
                           }else{
                             echo "-";
                           }
                          ?></td>
                        <td><?php
                        if ($abc["score_4"] !== "0"){
                           echo $abc["score_4"]; echo "%";
                         }else{
                           echo "-";
                         }
                         ?></td>
                      <td><?php
                      if ($abc["score_5"] !== "0"){
                         echo $abc["score_5"]; echo "%";
                       }else{
                         echo "-";
                       }
                        ?></td>
                        <td><?php
                        if ($abc["score_6"] !== "0"){
                           echo $abc["score_6"]; echo "%";
                         }else{
                           echo "-";
                         }
                          ?></td>
                          <td><?php
                          if ($abc["score_7"] !== "0"){
                             echo $abc["score_7"]; echo "%";
                           }else{
                             echo "-";
                           }
                            ?></td>
                            <td><?php
                            if ($abc["score_8"] !== "0"){
                               echo $abc["score_8"]; echo "%";
                             }else{
                               echo "-";
                             }
                              ?></td>
                              <td><?php
                              if ($abc["score_9"] !== "0"){
                                 echo $abc["score_9"]; echo "%";
                               }else{
                                 echo "-";
                               }
                                ?></td>
                                <td><?php
                                if ($abc["score_10"] !== "0"){
                                   echo $abc["score_10"]; echo "%";
                                 }else{
                                   echo "-";
                                 }
                                  ?></td>
                                  <td><?php
                                  if ($abc["score_11"] !== "0"){
                                     echo $abc["score_11"]; echo "%";
                                   }else{
                                     echo "-";
                                   }
                                    ?></td>
                                    <td><?php
                                    if ($abc["score_12"] !== "0"){
                                       echo $abc["score_12"]; echo "%";
                                     }else{
                                       echo "-";
                                     }
                                      ?></td>
                                      <td><?php
                                      if ($abc["score_13"] !== "0"){
                                         echo $abc["score_13"]; echo "%";
                                       }else{
                                         echo "-";
                                       }
                                        ?></td></tr>
                              <?php
                            }
                            mysql_free_result($res);
                            ?>
                          </tbody>
              </table>
              <?php }
              if ($exec && !$admin) { ?>
               <h4><?php echo $clusterManaging; echo " Announcements"; ?></h4>
                <h5 style="color: red;"><?php echo $msg ?></h5>
              <form id="post_announcements" method="post">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="title" name="title">
                  <label class="mdl-textfield__label" for="title">Title</label>
              </div>
              </br>
              </br>
              <div class="mdl-textfield mdl-js-textfield">
               <textarea class="mdl-textfield__input" type="text" rows="3" id="body" name="body"></textarea>
               <label class="mdl-textfield__label" for="body">Body</label>
            </div>
              <input id="submit_ann" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit" value="Post">
              </input>
             </form>
                <?php
              $res_cm = mysql_query("SELECT * FROM announcements WHERE cluster='".$clusterManaging."'");

              while ($ann = mysql_fetch_array($res_cm, MYSQL_ASSOC)) {
                $data[] = $ann;
              }
              $data = array_reverse($data,true);

              foreach ($data as $announcement){
                ?>
                <div class="announce">
                  <img class="delete_ann" src="img/x.png" onClick="self.location='http://www.irhsdeca.com/dashboard.php?delId=<?php echo $announcement['announceId']; ?>'">
                <h4 id="ann-title"><?php echo $announcement["title"]; ?></h4>
                <h5 id="ann-body"><?php echo $announcement["body"]; ?></h5>
                <h6 id="ann-date"><?php echo $announcement["datePosted"]; ?></h6>
                </div>
                <?php
              }
              mysql_free_result($res_cm);

              if ($currentCluster !== $clusterManaging){
                ?>
                <h4><?php echo $currentCluster; echo " Announcements"; ?></h4>
                <?php
                $res_cc = mysql_query("SELECT * FROM announcements WHERE cluster='".$currentCluster."'");

                while ($ann = mysql_fetch_array($res_cc, MYSQL_ASSOC)) {
                  $data3[] = $ann;
                }
                $data3 = array_reverse($data3,true);

                foreach ($data3 as $announcement){
                  ?>
                  <div class="announce">
                  <h4 id="ann-title"><?php echo $announcement["title"]; ?></h4>
                  <h5 id="ann-body"><?php echo $announcement["body"]; ?></h5>
                  <h6 id="ann-date"><?php echo $announcement["datePosted"]; ?></h6>
                  </div>
                  <?php
                }
                mysql_free_result($res_cc);
              }

            } else {
              ?>
              <h4><?php echo $currentCluster; echo " Announcements"; ?></h4>
              <?php
              $res_cc = mysql_query("SELECT * FROM announcements WHERE cluster='".$currentCluster."'");

              while ($ann = mysql_fetch_array($res_cc, MYSQL_ASSOC)) {
                $data2[] = $ann;
              }
              $data2 = array_reverse($data3,true);

              foreach ($data2 as $announcement){
                ?>
                <div class="announce">
                <h4 id="ann-title"><?php echo $announcement["title"]; ?></h4>
                <h5 id="ann-body"><?php echo $announcement["body"]; ?></h5>
                <h6 id="ann-date"><?php echo $announcement["datePosted"]; ?></h6>
                </div>
                <?php
              }
              mysql_free_result($res_cc);
            }

              ?>
            </div>
    <div class="footer">
        <img id="altlogo" src="img/logo_alt.png" align="left" />
        <img id="fbimg" src="img/facebook-box.png" align="right" />
        <h6><a href="http://www.irhsdeca.com" style="color: white;">irhsdeca.com</a></h6>
    </div>
</div>
</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

<script type="text/javascript" src="js/menu.js"></script>
              <script type="text/javascript">
              var user_event_1 = "<?php echo $userRow['userEvent1']; ?>";
              var user_event_code = user_event_1.substring(user_event_1.lastIndexOf("(")+1,user_event_1.lastIndexOf(")"));

              document.getElementById('event_assigned_code').innerHTML = "Event TBD";
              </script>


</html>
