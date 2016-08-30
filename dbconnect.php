<?php

 $host = $_GET["host"];
 $user = $_GET["user"];
 $pass = $_GET["pass"];
 $name = $_GET["name"];

 $conn = mysql_connect($host,$user,$pass);
 $dbcon = mysql_select_db($name);

 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }

 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
}

?>
<html>
<head>
<script type="text/javascript">
  $.get('/config.json', function(r){
    var db = r;
    window.location.href="/dbconnect.php?pass=" + db["dbpass"] + "&user=" + db["dbuser"] + "&name=" + db["dbname"] + "&host=" + db["dbhost"];
  });
</script>
</head>
</html>
