<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if(isset($_POST['submit'])) {

 $uplName = strip_tags(trim($_POST['name']));
 $uplSongStr = strip_tags(trim($_POST['song']));
 $uplSongInt = str_replace("C", "1", $uplSongStr);
  $uplSongInt = str_replace("D", "2", $uplSongInt);
   $uplSongInt = str_replace("E", "3", $uplSongInt);
    $uplSongInt = str_replace("F", "4", $uplSongInt);
     $uplSongInt = (int)str_replace("G", "5", $uplSongInt);
 echo $uplSongInt;

$error = false;
 if (empty($uplName) || empty($uplSongInt)){
   $error = true;
 }
 if (!$error){
   $query = "INSERT INTO hackw(uploaderName, song) VALUES('$uplName', '$uplSongInt')";
  $res = mysql_query($query);
   if ($res) {
    echo "Done!";
  }else{
    echo mysql_error();
  }
 }

}


?>
<html>

<body>
  <h4>Upload a song:</h4>

  <h4 id='cbutton'>C</h4><br><h4 id='dbutton'>D</h4><br><h4 id='ebutton'>E</h4><br><h4 id='fbutton'>F</h4><br><h4 id='gbutton'>G</h4><br>
  <form method='post'>
    <input id='song' name='song'></input><br>
  <input id='name' name='name'></input><br>
  <input id="submit" name="submit" type="submit" value="Submit">
  </input>
  </form>
<?php

$res_cm = mysql_query("SELECT * FROM hackw");

while ($ann = mysql_fetch_array($res_cm, MYSQL_ASSOC)) {
  $data[] = $ann;
}
$data = array_reverse($data,true);

foreach ($data as $announcement){
  ?>
  <div class='clickableSong' id="<?php echo $announcement['subId'];?>">
  <h4 id="ann-title"><?php echo $announcement["uploaderName"]; ?></h4>
  <h5 id="ann-body"><?php echo $announcement["song"]; ?></h5>
</div>
  <hr/>
  <?php
}
mysql_free_result($res_cm);
?>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type='text/javascript'>
var strang = ""
$('#cbutton').on('click', function(){
  strang += 'C';
      $('#song').attr('value', strang);
});
$('#dbutton').on('click', function(){
    strang += 'D';
        $('#song').attr('value', strang);
});
$('#ebutton').on('click', function(){
    strang += 'E';
        $('#song').attr('value', strang);
});
$('#fbutton').on('click', function(){
  strang += 'F';
      $('#song').attr('value', strang);
});
$('#gbutton').on('click', function(){
  strang += 'G';
      $('#song').attr('value', strang);
});
$('#submit').on('click', function(){
    $('#song').attr('value', strang);
});
</script>
</body>

</html>
