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
   $query = "INSERT INTO hackw2(uploaderName, song) VALUES('$uplName', '$uplSongInt')";
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
      margin: 1rem;
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

$res_cm = mysql_query("SELECT * FROM hackw");

while ($ann = mysql_fetch_array($res_cm, MYSQL_ASSOC)) {
  $data[] = $ann;
}
$data = array_reverse($data,true);

foreach ($data as $announcement){
  $url = 'localhost/game.html?title=' . $announcement["uploaderName"] . '&song=' . $announcement["song"];
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
$('#play').on('click', function(){
  for (i = 0; i < strang.length; i++){
    if (strang[i] == 'C'){
      setTimeout(function() {
          oscillator.frequency.value = 261;
      }, 500);
    }else if (strang[i] == 'D') {
      setTimeout(function() {
          oscillator.frequency.value = 294;
      }, 500);
    }else if (strang[i] == 'E') {
      setTimeout(function() {
          oscillator.frequency.value = 330;
      }, 500);
    }else if (strang[i] == 'F') {
      setTimeout(function() {
          oscillator.frequency.value = 349;
      }, 500);
    }else if (strang[i] == 'G') {
      setTimeout(function() {
          oscillator.frequency.value = 392;
      }, 500);
    }
  }
  setTimeout(function() {
      oscillator.frequency.value = 0;
  }, 500);
});
$('#submit').on('click', function(){
    $('#song').attr('value', strang);
});
</script>
</body>

</html>
