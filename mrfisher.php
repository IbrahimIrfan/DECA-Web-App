<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if(isset($_POST['submit'])) {
   $upass = strip_tags(trim($_POST['pass']));

   $password = hash('sha256', $upass);
  $query = "UPDATE users SET password='$password' WHERE userId=".$_SESSION['user'];
  $res = mysql_query($query);

   if ($res){ ?>
    <h4>Success</h4>
<?php }
}
?>

<html>
<body>
<form method="post">
      <input type="password" id="password" name="pass">New Password:</input>
      <input id="submit" name="submit" type="submit" value="Update"></input>
</form>
</body>
</html>
