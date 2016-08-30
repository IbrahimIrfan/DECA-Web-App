

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

  <div id='cssmenu'>
    <ul>
        <li><a href='index.php'><span>Home</span></a></li>
        <li><a href='about.php'><span>About DECA</span></a></li>
        <li><a href='events.php'><span>Events</span></a></li>
        <li><a href='dashboard.php'><span>Dashboard</span></a></li>
        <li><a href='announcements.php'><span>Announcements</span></a></li>
        <li><a href='dates.php'><span>Schedules</span></a></li>
        <li class="active"><a href='exams.php'><span>Exams</span></a></li>
        <li class='last'><a href='login.php?logout'><span>Logout</span></a></li>
    </ul>
  </div>
</br>

    <div class="content">

        <div class="breadcrumb">
            <table class="breadcrumb">
                <tr>
                    <td id="clusterClicked"> </td>
                    <td id="slash1" style="display: none;">/</td>
                </tr>
            </table>
        </div>

        <h4 id="table-title"></h4>

        <table class="mdl-data-table mdl-js-data-table" id="table" width="500">
            <tbody>

            </tbody>
        </table>

    </div>


    <div class="footer">
        <img id="altlogo" src="img/logo_alt.png" width="100" align="left" />
        <img id="fbimg" src="img/facebook-box.png" width="45" align="right" />
        <h6><a href="irhsdeca.com" style="color: white;">irhsdeca.com</a></h6>
    </div>

</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<script type="text/javascript" src="js/exams.js"></script>


</html>
