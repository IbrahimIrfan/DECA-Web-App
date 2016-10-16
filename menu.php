<?php
ob_start();
session_start();
require_once 'dbconnect.php';

$add = mysql_query("DELETE * FROM hackw2");
if(isset($_POST['submit'])) {

 $uplName = strip_tags(trim($_POST['name']));
 $uplSongStr = strip_tags(trim($_POST['song']));

$error = false;
$errMSG = "";
 if (empty($uplName) || empty($uplSongStr)){
   $error = true;
   $errMSG = "You must enter all fields";
 }
 if (!$error){
   $query = "INSERT INTO hackw2(uploaderName, song) VALUES('$uplName', '$uplSongStr')";
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
<head>

  <style>
  body {
      height: 100%;
      padding: 1rem;
      margin: 0;
      font-family: 'Heebo', sans-serif;
      background-color: #F3E5F5;
  }

  .upload_song h4,
  #submit, #home {
      display: inline-block;
      font-weight: bold;
      -webkit-transition: .5s;
      border: 2px solid #7B1FA2;
      background-color: #9C27B0;
      text-decoration: none;
      color: #FAFAFA;
      border-bottom: 5px solid #7B1FA2;
      border-radius: 5px;
      display: inline-block;
      padding: 1rem 1.5rem;
  }

  .upload_song h4:hover,
  #submit:hover, #home:hover {
      background-color: #7B1FA2;
      border-bottom: 5px solid #4A148C;
      cursor: pointer;
  }

  .upload_song {
      margin: 1rem;
  }

  .clickableSong {
      display: inline-flex;
      flex-wrap: wrap;
      background-color: #E1BEE7;
      border-bottom: 10px solid #9C27B0;
      width: 20vw;
      height: 20vw;
      padding: 1rem;
  }
  .clickableSong a {
      text-decoration: none;
      color:black;
  }

  #song, #name {
      margin: 1rem;
      padding: .2rem;
      width: 50%;
      background: transparent;
      font-size: 2rem;
      word-break: break-word;
  }

  #submit {
      font-size: 1rem;
      margin: 1rem;
  }
  #home {
      width:12vw;
      font-size: 1rem;
      padding: .5rem 1rem;
  }
  #play{
    display: inline;
  }
  </style>
</head>
<body>
   <a id="home" align="center" href="index.html">Home</a>
  <div class="upload_song">
    <h2>Upload a song:</h2>
    <h2><?php echo $errMSG; ?></h2>

  <h4 id='cbutton'>C</h4><h4 id='dbutton'>D</h4><h4 id='ebutton'>E</h4><h4 id='fbutton'>F</h4><h4 id='gbutton'>G</h4><h4 id='backspace'>&#9003;</h4><br>
</div>

  <form method='post'>
    <input id='song' name='song' readonly="true"></input><div id='play'>&#9654;</div><br>
  <input id='name' name='name'></input><br>
  <input id="submit" name="submit" type="submit" value="Submit">
  </input>
  </form>
  <div>
<?php

$res_cm = mysql_query("SELECT * FROM hackw2");

while ($ann = mysql_fetch_array($res_cm, MYSQL_ASSOC)) {
  $data[] = $ann;
}
$data = array_reverse($data,true);

foreach ($data as $announcement){
  $url = 'game.html?title=' . $announcement["uploaderName"] . '&song=' . $announcement["song"];
  ?>
  <div class='clickableSong' id="<?php echo $announcement['subId'];?>"><a href='<?php echo $url; ?>'>
  <h4 id="title"><?php echo $announcement["uploaderName"]; ?></h4>
  <h5 id="song"><?php echo $announcement["song"]; ?></h5></a>
</div>
  <?php
}
mysql_free_result($res_cm);
?>
</div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type='text/javascript'>
var context = new(window.AudioContext || window.webkitAudioContext)();
var oscillator = context.createOscillator();
oscillator.connect(context.destination);

oscillator.frequency.value = 0;
oscillator.start();
var strang = ""
$('#cbutton').on('click', function(){
  strang += 'C';
      $('#song').attr('value', strang);
      oscillator.frequency.value = 261;
      setTimeout(function() {
          oscillator.frequency.value = 0;
      }, 500);
});
$('#dbutton').on('click', function(){
    strang += 'D';
        $('#song').attr('value', strang);
        oscillator.frequency.value = 294;
          setTimeout(function() {
              oscillator.frequency.value = 0;
          }, 500);
});
$('#ebutton').on('click', function(){
    strang += 'E';
        $('#song').attr('value', strang);
        oscillator.frequency.value = 330;
          setTimeout(function() {
              oscillator.frequency.value = 0;
          }, 500);
});
$('#fbutton').on('click', function(){
  strang += 'F';
      $('#song').attr('value', strang);
      oscillator.frequency.value = 349;
        setTimeout(function() {
            oscillator.frequency.value = 0;
        }, 500);
});
$('#gbutton').on('click', function(){
  strang += 'G';
      $('#song').attr('value', strang);
      oscillator.frequency.value = 392;
        setTimeout(function() {
            oscillator.frequency.value = 0;
        }, 500);
});
$('#backspace').on('click', function(){
   strang = strang.substring(0, strang.length - 1);
       $('#song').attr('value', strang);
});

var i;

function playAll () {
   setTimeout(function () {
     if (strang[i] == 'C'){
           oscillator.frequency.value = 261;
     }else if (strang[i] == 'D') {
           oscillator.frequency.value = 294;
     }else if (strang[i] == 'E') {
           oscillator.frequency.value = 330;
     }else if (strang[i] == 'F') {
           oscillator.frequency.value = 349;
     }else if (strang[i] == 'G') {
           oscillator.frequency.value = 392;
     }
      i++;
      if (i <= strang.length) {
         playAll();
      }else{
        oscillator.frequency.value = 0;
      }
   }, 500);
}

$('#play').on('click', function(){
  i = 0;
  playAll();
});
$('#submit').on('click', function(){
    $('#song').attr('value', strang);
});
</script>
</body>

</html>
