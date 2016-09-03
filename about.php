<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
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
  <img id="menu-logo" src="img/logo2.png" height="50" align="left">
  <img id="menu-bars" src="img/menu_bars.png" height="50" align="right">
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
  </div>
  </br>

        <div class="content">


        <h4>What is DECA?</h4>
        <h6>DECA is the largest student business organization and competition in the world.
  It has over 200,000 members, 3,500 high school chapters, and 275 collegiate chapters at an
  international level, with over 11,000 students from Ontario participating in it.
  Many people would describe it differently, but one thing's for sure: it's definitely worth it.</h6>
        <br/>

        <h5 id="quote-thing">DECA prepares emerging leaders and entrepreneurs for careers in marketing,
 finance, hospitality and management in high schools and colleges around the globe.</h5>

        <br/>

        <h4>How does it work?</h4>

        <h6>The competition is composed of three levels: Regionals, Provincials, and Internationals.
  Iroquois Ridge High School is part of the Hamilton + Private region, which means we compete
  at the Hamilton Convention Center in early November for the regionals component. The Private
  just means private schools are participating. Last year, we had over 80 students in our
  chapter for regionals, with over 60% making it to the provincial level. Out of those,
  5 students made it to the international level, otherwise known as the International Career
  Development Conference (ICDC), where they competed against students from  the US, Europe,
  Asia, and other places around the world who followed a similar process. This was held in
  Nashville, Tennessee, with this school year's ICDC planned for Anaheim, California.</h6>

        <img src="img/image1.jpg" width="100%" />

        <h6>At each level, there are two components that contribute : the written exam and the
    role-play case study. The written exam is a 100 question multiple choice test and every
    student takes one based on their cluster - we'll go over that in a minute. The case study,
    however, is different for every event, of which there are a lot to choose from. To find out
     more about each event, please take a look at the Events page on this website
     where there is a short description and a link for resources for each event where you can
     look at past exams and case studies. The exams are also available to be taken online -
     right on this website. Once you are registered, you will have to complete one online practice exam a week,
     which you will see in the 'Your Homework' section of the Dashboard. You can also view a list of all the
     exams in 'Exams' and take them as many times as you wish.
      The executives will also provide more information and tips during cluster meetings. Whether or not you
      advance to the next level of competitions
      depends on the total score of your written exam and case study, but this is often a form
      of insurance - even if you do poorly on your case study, for example, a good written exam
      mark (which people tend to do more poorly in) might be able to boost you up.</h6>

        <h4>What is a Cluster?</h4>
<img src="img/clusters.png" align="left" width="40%"/>
        <h6>A 'cluster' is how events are categorized within the competition. There are four main
        clusters in DECA, which are Business Management and Administration, Finance, Hospitality and
        Tourism, and Marketing. Every event relates closely to which cluster they are in, so they can
        often help as guidelines for when you make your selection. <br/><br/>
Students participating in different events get completely different case studies, but all
students within the same cluster take the same written exam. For instance, although a student
in Apparel and Accessories Marketing may have a completely irrelevant case study when looked at
 by a student in Automotive Services Marketing, they will have the same written exam since they
 are both within the Marketing cluster. <br/> <br/>
Each cluster also has its own Principle event, which are events specifically for first-time
DECA participants, although it is not mandatory for them to select a Principle event to compete in.
However, Principle event students do not take their respective cluster written exams;
rather, there is a separate Business Administration Core exam that is taken by all Principle students.</h6>

<h4>How do Case Studies work?</h4>
<img src="img/case_studies.jpg" align="right" width="50%"/>
<h6>Every case study is basically a role-play interview; you are given a specific situation with
  a role you have to undertake and a task to complete or questions to answer. Even within the same
  event, case studies can be drastically different and so it is vital that time is spent preparing
  and practicing for them. You are given the case study, some time to prepare your content, and then
  comes the interview. The specific times depend on what type of event you're participating in. You
   will sit across from the judge (who will also be role-playing as defined by the case study) from
   where your presentation will be conducted. The judges are not allowed to communicate with you
   during the presentation, but they will ask you some questions afterwards which you must answer.
   <br/><br/>
Case studies are marked following a rubric made up of Performance Indicators (or PI's for short).
Each case study has a general performance indicators and specific performance indicators that are
given to you along with the case study. General performance indicators are similar to your
Communication marks for school assignments - attire, facial expressions, body language, etc.
 Specific performance indicators are where the majority of your marks come from. These revolve
 around the contents of your interview and it is extremely important to develop your presentation
 around them and prepare some answers before the actual competition for specific PI's.</h6>


    </div>


    <div class="footer">
      <img id="altlogo" src="img/logo_alt.png" width="100" align="left"/>
      <img id="fbimg" src="img/facebook-box.png" width="45" align="right"/>
    <h6><a href="http://www.irhsdeca.com" style="color: white;">irhsdeca.com</a></h6>
    </div>

  </div>
</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>

</html>
