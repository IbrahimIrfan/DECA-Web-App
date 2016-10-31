<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if( !isset($_SESSION['user']) ) {
 header("Location: login.php");
 exit;
}

if(isset($_POST['submit'])) {
   $upass = strip_tags(trim($_POST['pass']));

   $password = hash('sha256', $upass);
  $query = "UPDATE users SET userPass='$password' WHERE userId=673";
  $res = mysql_query($query);

   if ($res){ ?>
    <h4>Success</h4>
<?php } else {?>
 <h4><?php echo mysql_error(); ?></h4>
<?php
  }
}
?>

<html>
<body>
<form method="post">
      New Password:<input type="password" id="password" name="pass">
      <input id="submit" name="submit" type="submit" value="Update"></input>
</form>
</body>
</html>
