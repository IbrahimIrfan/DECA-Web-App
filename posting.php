<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if(isset($_POST['submit'])) {

 $uplName = strip_tags(trim($_POST['name']));
 $uplsong = strip_tags(trim($_POST['song']));

$error = false;
 if (empty($uplName) || empty($uplsong)){
   $error = true;
   $errMSG = "You must complete all fields.";
 }
 if (!$error){
   $query = "INSERT INTO hackw(uploaderName, song) VALUES('$uplName', '$uplSong')";
   $res = mysql_query($query);
   if ($res) {
     echo "Done!";
   }
 }

}




?>
<html>

<body>
  <form method='post'>
  <input id='name' name='name'></input><br>
  <input id='song' name='song'></input><br>
  <input id="submit" name="submit" type="submit" value="Submit">
  </input>
  </form>

  
</body>

</html>
