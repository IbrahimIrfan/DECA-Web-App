<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';

// redirect to login if not logged in
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }

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
 }elseif ($userRow["userEmail"] == "sophie" || $userRow["userEmail"] == "asdaq_paracha@hotmail.con"){
   $exec = true;
   $clusterManaging = "Marketing-Singles";
 }elseif ($userRow["userEmail"] == "amy.kim162@gmail.com" || $userRow["userEmail"] == "vswinhoe@gmail.com"){
   $exec = true;
   $clusterManaging = "Hospitality";
 }elseif ($userRow["userEmail"] == "nataniaolusanya@gmail.com" || $userRow["userEmail"] == "jennifer"){
   $exec = true;
   $clusterManaging = "Business-Admin";
 }

 if ($userRow["userEmail"] == "fisherji@hdsb.ca"){
   $admin = true;
   $clusterManaging = "N/A";
 }

/*
 if ($userRow["userEventAssigned"] == "PBM" || $userRow["userEventAssigned"] == "PMK" ||$userRow["userEventAssigned"] == "PFN" || $userRow["userEventAssigned"] == "PHT"){
   $currentCluster = "Principles";
 } elseif ($userRow["userEventAssigned"] == "PFL" || $userRow["userEventAssigned"] == "ACT" ||$userRow["userEventAssigned"] == "FTDM" || $userRow["userEventAssigned"] == "BFS"){
   $currentCluster = "Finance";
 }elseif ($userRow["userEventAssigned"] == "BTDM" || $userRow["userEventAssigned"] == "MTDM" ||$userRow["userEventAssigned"] == "STDM"){
  $currentCluster = "Marketing-Teams";
  }elseif ($userRow["userEventAssigned"] == "AAM"|| $userRow["userEventAssigned"] == "AASM"|| $userRow["userEventAssigned"] == "BSM"|| $userRow["userEventAssigned"] == "FMS"|| $userRow["userEventAssigned"] == "MMS"|| $userRow["userEventAssigned"] == "RMS"|| $userRow["userEventAssigned"] == "SEM"){
  $currentCluster = "Marketing-Singles";
}elseif ($userRow["userEventAssigned"] == "HLM" || $userRow["userEventAssigned"] == "QSRM" ||$userRow["userEventAssigned"] == "RFSM" || $userRow["userEventAssigned"] == "HTDM"|| $userRow["userEventAssigned"] == "TTDM"){
   $currentCluster = "Hospitality";
 }elseif ($userRow["userEventAssigned"] == "BLTDM" || $userRow["userEventAssigned"] == "HRM"){
   $currentCluster = "Business-Admin";
 } */
 $currentCluster = "Cluster";

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

tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt111111111111111111111111111111111111ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttti
ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt11111111111tttttttt1111111111111111111111t1111111111111111111tttttttttttttttttttttttt1ttttttttt1tt1tttttttttt1tttti
ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt111t11t11111111111t1111111111111111111111111111111111111111111tt11111tt11111111111111111111111111t1tt1111tttt111111111111111111111111111111ttttti
ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111t1tt1111tttt111111111111111111111111111111ttttti
ttttttttttttttttttttttttttttttttt1i;;ittttttttttttttttttttttttttttttttttttttttttttttttttttttttttt111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111tt111ttttttttti
ttttttttttttttttttttttttttttiiit1;::::;1tttttttttttttttttttttttttttttttttttttttttttttttttt1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111tttttttttttttttttttti
tttttttttttttttttttttttttti::::;i11ii;;;1tttttttttttttttttttttttttttt1ttttt111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111tttttttttttttttttttttttti
tttttttttttttttttttttttttt1111iii1ttttiiitttttttttttttttttttttttttttt111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111tttttttttttttttttttttttti
ttttttttttttttttttttttt1;:;tfffti1fffti::;1tttttttttttttttttttttttt1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111t11111tttttt11t11111tttt1i
tttttttttttttttttttttt1ii;;;1Lfti;it1i;;;;itttttttttttttttttttttttt111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111t1111111111i
ttttttttttttttttttttttttt1t111t1i;i1tt11i;;1tttttttttttt111t11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111t11t111111111i
tttttttttttttttttttttttttfft11fft1i1Lfti;:,,;1tttttttttt1i::,:i111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttttttttttttt1;1ft1i::11;:::::;1ttttt1tt1i;;::::;11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttttttttttt1ii;;11i;;:;1ti;;;::;1111111t1i;;;;;:;1t111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttttttt1ii11tt1i1t1iii;;fti;;;::i11t1t111iiiiii;i11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttttttttt1;:::itt11;;tt1i;;;;,,,,,,,:111t1t1ii1111ii11t11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttttttt1i1i;11;;;::11;:,,,:::::,,,,i11111111tt1i111111111111111111111111111111111111111111111111111t111tttLCCGGCLfftftLtttttt1111111t11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttttttttttttt1i;iii;;;:::,,,,:::::::::,:i11i;::;;;:i1111111111111111111111111111111111111111111111fC000800G0800800GGCLCGCCCCGCCCCCLCGGGCCLt11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttttttttttt1::itii;;::::,::;;;;;;;,,,,,i1;;::;;:i11111111111111111111111111111111111111111tC000080808880G0CGGGGGGGGGGGGGGGCGGG080000GGGGGGLf1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttttttttt111i;:it;::::;;;::;;;;;;:,,,,,,,1;;::::;1111111111111111111111111111111111111tC088888000G000080GGG00G0GG0GG0G00GGG00800GGGGGG0GGGGCCCL1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttttttttttttt111i::;;:,,::;;;;;;;;:,,,,:::::,,::::::1111111111111111111111111111111111tL0800000G0G0GGG000000G000G0000000G0000008888888000GGGGGGGGCLt1t111111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttt1111ttttt1i;;:::::,,:;:;::;:::::,:::::::,,,:,,11111111111111111111111111111111CG08888880000088G0G00880GG0G00G0000G00000088880000000000GGG000CCLf111111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttt111tttttt11i;;::::::::::,:,,::::,,,::::,,,,,,,i11111111111111111111111111111L0888888000088008888808880G0800000G00G08008000000800GGCGG08880GG000CCf1111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttttttt111ttt111i::::::::,,::,,,:::::,,,::,,:,:,,i111111111111111111111111111t0888880000880000888888888880080008000008808008888888888000GGCG08000GGGGL111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttttttt111111t11t1i;;:::,:;:,,,,,,,:::::::::::::::::i11111111111111111111111111f08800000088800800000000000008888800000000000888888888888888880000G0800GCG111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttt111111111111111111ii;;;;;:,,,,,,,,,,::::::::;;;;;;::1111111111111111111111111110880000000800008000000000000GG0GGGGGGGCGCLCCCGGG0008888888888888800G0800GC111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttt1111111111111111111iiii;:,:,,,,,,,,,,::::;;;;;;;;;;;11111111111111111111111111t0808800888008000080000000000GCLLfttttffft1111i11tfLCG00000088888888000000Ct11111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttt11111111111111111111t11ii;;;;::,,,,,,,,,::::;;;iiiiii111111111111111111111111111f888888880088000880000000000GLt1i;;;;;;;;:::::::::;;ii1tfLCCG0888888800880GC11111111111111111111111111111111111111111111111111111111111111111111111111111111111i
ttttttt1111111111111111111111t1t11iiii;;::::,,,,,,:::;iiiiiii;i111111111111111111111111111L888888888888808888888800GLti;;;:::::::::::::::::::;;;ii11tfLCG08808800008GL11111111111111111111111111111111111111111111111111111111111111111111111111111111111i
ttt1111111tttt11111111111111111tt11iiiii;;;;:::,,,,:;;;iiiii111111111111111111111111111111C88888888888800880000GCLf1i;;:::::::::::::::::::::::;;;;ii11tfLC0000000G00Gt11111111111111111111111111111111111111111111111111111111111111111111111111111111111i
ttt1111111tttt111111111111111111tt11111iiiii;;;;:::::;i11t11111111111111111111111111111111f888888888888088000GCLt1i;;;::::::::::::::::::::::;;;;;;;;ii11tLC0GG000G00t111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttt1tt111ttttttt11111111111111111t1tttttt111iiiii;;;;11t111111111111111111111111111111111t0888888808808880GCLf1ii;;;;;;::::::::::::::::::::::::::;;;;iiitLCGGG0GG0C1111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttt1tt111ttttttt1tttt1111111111111tffffffttttt1tt11ii11i;11111111111111111111111111111111tC888088888808880GLtii;i;;;;;;;;;;;:::::::::::::::,::::::::;;;;itfCGCLCCCt1111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttt1tt1t11111111111111111ttfffLffffffttttt111i:1111111111111111111111111111111111L0888888808880GLtii1ii;;;;;;;;;;;;;;;:::::::::::::::;;;;;;;iiiiii11tLGi11111111111111111111111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttt11tt111111111111111111ttttffffLLLLft11iii;:1111111111111111111111111111111111tG08888800880GCftiiiiiiii;;;;;;;;;;;::::::::::::::::::::;;;;;;;;iii1tL:i111i111111111111111111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttt11111111111111111111111111111111ttttt1;;;;;;:11111111111111111111111111111111111L08888800000GCLt1i11111111111iii;;;;::::::::,::,:::,,:::;;iii11iiii1f11i11i1iii11111111111111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttttt111111111111111111111iiiiii11111ii;;;;:::i111111111111111111111111111111111111G888800000GCL1iittt1111ttttttt11ii;;;::::::::,:::,:;;iii1ttffttt11t.1:,,:111i111i1111111111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttt11111111111111111111111iiiiiiiiiiiiii;;:::::1111111111111111111111111111111111111L088000GCLf1i;it1ii;;;;;;;iii11i11iii;;::::::;;;;;i1111tt11ii1tfft,:iCLt;11i1iiiiiii111111111111111111111111111111111111111111111111111111111111111111111;
tttttttt11ttt1111111111111111111111tfiiiiiiiiiiiiiii;;:::::f1111111111111111111111111111111111111CGGGCCLt1i;i;iiiii;;;;;;;;;;;;iiiiiii;;;;;;;;;;iiiiiii;;;;;;iiiit,.1fCC1i1iiiiiiiiii11111111111111111111111111111111111111111111111111111111111111111111;
tttttttt11t11111111111111111111111C@1iiiiiiii11111ii;;;::::0111111111111111111111111111111111111itLCLfft1iii;;iii;;;;;ii;;;;;;;;;;;;;;;;;;;;;ii;;i;;;;;:;;;;;;ii1i,.iiLCti1iiiiiiiiii11111111111111111111111111111111111111111111111111111111111111111111;
ttttt1tt111111111111111111111t11t0801iii;;iii1111iii;;;;:::0f111111111111111111111111111111111i111LCCGGCLft11t1i1111iiii1t1i;;i;:;i;;;;;;;::;;;;;;;i;:;;;;;;;i1iii,,;itL1i1iiiiiiiiiiii1iiiiiii1111111111111111111111111111111111111111111111111111111111;
ttttt1tt111111111111111111111ttf88@C1iiiiiiii1111iiii;;;;;i8C11111111111111111111111111111111i11111GCG0800GCC0f111tLCGCCG00GCCft1i;;;;;;:::::;;:;iiitLffLLfLt1ii1i,,;1if1iiiiiiiiiiiiii1iiiiiiiiiii111111111111111111111111111111111111111111111111111111i
tttttt111111111111111111ttttt1C888@C11iiiii1111111iiiii;;iL8G11111111111111111111111111iiiiii11tf11Lftt111ttttfi1ttLLLffLGGGCti1t1;:;;;;:::::;;;::1L000GLttCGCLt1i,,;1;1iiiiiiiiiiiiii11iiiiiiiiiii111111111111111111111111111111111111111111111111111111;
tttttttttt111111111tttttt1ttf888888Ct11ii11111111111iii;itG8Gf1111111111111111111111111iiiiiitC00CLtfft11iiiiiiiiiiiii1i1111ii;;;::::::::::::;;;::;i1tft111ffft1ii,,,;;i;1iiiiiiiiiiii11iiiiiii1111111111111111111111111111111111111111111111111111111111;
tttttttttttttttttttttttt1tt088888@8Gf111111ttttt11111111tC0GGC11111111111111111111111iiiiiiii1fGG11ttftt11ii;;;;;;;;;;;;;;;;;;;::::::::::::::::;;:::::;;;iiiiiiiii,,.:;:iiiiiiiiiiiiiiiiiiiiiiiii11i11111111111111111111111111111111111111111111111111111;
tttttttttttttttttttttt1ttC8@08888@80Lt11ttttfffffttttfffCG000G1111111111111111111111111111iii1fCL11fLGfft11i;;;;;;;;;;;;;::;;;:::::::;;;::::;;;;;:::::::::;;;;;i;;,,,,..iiiiiiiiiiiiiiiiiiiiiiiii11i11111111111111111111111111111111111111111111111111111;
ttttttttttttttttttttttttt08888888@80CftttttfffLLLLLLLLLG0800GGL1111111111111111111111111iiiiiitfL11LCCCfftt1;;;;;;;;;::::::;;::,::::;;;;;:::;;;;;:::,,,,::::::;;;;,,,,:,;iiiiiiiiiiiiiiiiiiiii11111111111111111111111111111111111111111111111111111111111;
tttttttttttttttttttttttt1008@888@@80GCffffffffLLLLLLCG88880000G1111111111111111111111111iiiii11fLfifLtifttt11ii;;::;;;;;;::::,,,::;;;;;;;;::;;;;;;::,:::,,::::;;ii:,,,,:1iiiiiiiiiiiiiiiiiiiii11111111111111111111111111111111111111111111111111111111111;
tttttttttttttttttttttttt1008888@@880GCLLfLLfLfLLLLG88888880000Gf11111111111111111111111111iii111tti1t11ttttt111;;:::;;;;:::::::;iiiii;;;;;;;::;;;iii;;;:,,,::;;;;;::,,iiiiiiiiiiiiiiiiiiiii11111111111111111111111111111111111111111111111111111111111111;
tttttttttttttttttttttttt100888@@@880GGCLLLLLLLC0888888888800000C11111111111111111111111111iii1i1111Ltiittttttt1i;;:::;;;::::;;i111ii;;;;;;;;:;i;;;i1ii;;;:,,::;;;;;:,,iiiiiiiiiiiiiiiiiiiii11111111111111111111111111111111111111111111111111111111111111;
ttttttttttttttttttttttt1t0808@@@@8880GGCCLLG8888888888888808000Gt11111111111111111111111111iiiiii11iiii1tttttt1i;;;;;;;;:::iiiitft1ii11111iiiiiii;;i11i;;;::::;;;i;:,,iiiiiiiiiiiiiiiiiiiii11111111111111111111111111111111111111111111111111111111111111;
ttttttttttttttttttttttttf0888088@@800000888888888888888808800000f11111111111111111111111111iiiiii1i;;iiitttttt1iiii;;;;;;;iii;;i111ttfLLftttttfff1;;111iii;;;;;;;i:::,iiiiiiiiiiiiiiiiiiiii11111111111111111111111111111111111111111111111111111111111111;
tttttttttttttttttttttttt0088888888888888888888888888888888800000C111111111111111111111111111iii1i1i11ii1fftttt111iiii;;;;iiii11;:;;;;;;;iiiii;;ii;;;i1iiii;;;;;;;i::::iiiiiiiiiiiiiiiiiiiiiii111111111111111111111111111111111111111111111111111111111111;
ttttttttttttttttttttttt088888888888888888888888888888888888800000t111111111111111111111111111iiiiiiii1t11ffttt1111iiiiiiii1111ii;ii;;iii;iiiiiii;;;;;iiiiiiiiiiiii;::iiiiiiiiiiiiiiiiiiiii1ii111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttttttttttC008888888888888888888888888888888888880000L111111111111111111111111111iiiiiiiiiiiifffftt1111111iiiii111iiiii1111t1111111iiiiii11i1iiii;ii11i::iiiiiiiiiiiiiiiiiiiii111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttttttL8088888888888888888888888888888888888888000G11111111111111111111111111i11111111iiiitfffft11111iiiii1ii1ttfffLLfffffffftttffftii111ii1iii1111;::i1iiiiiiiiiiiiiiii111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttttttC88888888888888888888888888888888888888880000CtiitG0G0GGGGCGGGGCCCLfftt1i111111111iiifffft1iiiii;;;;iiitLCLt111i11ii11111tttfCLf1111ii;;iiii1;:;iiiiiiiiiiiiiiiiii111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttttttttttG8888888888888888888888888888888888888880000GGCG000000000GGG0000000000000000GCt111i11LLffiiiiii;;;;;iii1tftt1iii;::;;:::;iitfLf11i;;;i;iii11;:iiiiiiiiiiiiiiiiii1111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttttttttttt0888888888888888888888888888888888880000000GGGGGG000000G0000000000000000000008000GtitCLfiiiiiiii;;;;;;;i1ttttttt1111111ttttt1i;;;;;;;iiiii1;;iiiiiiiiiiiiiiiiii1111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttttttttt088888888888888888888888888888888888080000G0GGG00GG00000000G00G000000000000000888888CCL1iiiiiii;ii;;;iii1tfffttt111111tttt1iiii;;;;;;iii1fif1iiiiiiiiiiiiiii111111111111111111111111111111111111111111111111111111111111111111111i
tttttttttttttttttttttttt088888888888888888888888888888888888080000000GGG08GGG00000G000G00000G00000000000008888Gt11iiiii;;;;;;;;;ii1tffffffffffft1iiii;;i;;iiii11fGLLftiiiiiiiiii1111111111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttttttttttt00008888888888888888888888888888888888880000G80GGG0GG000000G000GG0000000000G000000008880fft111iiiiii;;;iii;;ii11111111iiiii;;;;ii;iii11tC08CLLff1ii1111iiiiiii1111i111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttttttttttL00008888888888888888888888888888888888888000000GGG0G00800800080G0GGG0G00000G000000000000fffftt111iiiiii;;;;;;;;;;;;;;;:;;;;;;;;iii11ttLG888CLLLLffCGGGGGGGCCLLft111111111111111111111111111111111111111111111111111111111111111111i
ttttttttttttttttttttttC000088888888888888888888888888888888888880000080GG0G00000080008000GGGGGG000G000000000000CLLffftttt11iiii;;;;;;;;::::::::::;;;;ii111tfC0808@CCCLLLftCCCCCCGGGGGGGGGCCCCCCLftt111111111111111111111111111111111111111111111111111111i
ttttttttttttttttttttttf00808888888888888888888888888888888888880000008000GG0888800080880000GGGGGG0G00000G0000000008@8@880GCCLffffttffLCGGGGGGGCLLfttttfffLG80GGGGCCCCCLLLfffCCCCCCCGGGGGCCGGGGCCGCCCCLCLf111111111111111111111111111111111111111111111111i
ttttttttttttttttttttttt0088888888888888888888888888888888888888800008@8000000888800000888000GGGGGGG00G00G000000G000888888@880GGCCLLLLLLLLLLffffffLLLLLCG8800GGGGGGCCCCLLLLLfLCCCCCCCCCGGGGCCCCCGCCCCCCCCCCLLLt1111111111111111111111111111111111111111111i
tttttttttttttttttttttttC888888888888888888888888888888888888888080008@8000000888880000888800GGGGGGG0GGG0G000000G0000088888888@@88000GGGGGGGGGGGGGGG00080000GGGGGGGCCCCCCLLLLLCCCCCCCCCCCCCCGCCCCCGCCCCCCCCCCLLLLLf111111111111111111111111111111111111111i
ttttttttttttttttttttttttG88888888888888888888888888888888888888888008@8000000888888008888880G0GGGGGGGGGGG000000GGGGG0088888888888888@@@@88@880C8888t800000GGGCCCCCCCCCCLLLLLLCCCCCCCCCCCCCGCCCCCCCCCCCCCCCCCCCLCCCLLLf11111111111111111111111111111111111i
tttttttttttttttttttttttttG8888888888888888888888888888888888888888888@8000000888@88008888888000GGGGGGGG0G00000GG0GGGGGG8888888000888888888088800GGf88000GGGGGGGGCCCCCCCCCCCLLCCCCCCCCCCCCCCCCCCLCCCCCCCCCLCCCCCCCCCCLCLLft1111111111111111111111111111111i
tttttttttttttttttttttttttt088888888888888888888888888888888888888888@@8800000088@888088888888000GGGGGGG0G00000G00GGGGGGG88800000000000000000000008088@@8GGGGCCCCCCCCCCCCCLLLLCGGCCGCCCCCCCCCCCCCLLCCCCCCCCLLCCCCCCCCCCCCCLLLffCLt111111111111111111111111i
ttttttttttttttttttttttttttt088888888888888888888888888888888888888@8888888000888@@8888@8888888000GGGGGGGG00000G00GGGGGGGG0808000000000000000G000@8888@@@@88GGCGCGCCCCCCCCCCCCGGGCCCGCCGCLCCCCCCCCCLCCCCCLLCLLCCCCCCCCGCCCCCLCLL0GLt1111111111111111111111i
tttttttttttttttttttttttttttt888888888888888888888888888888888888888888888888888@@88888@8888888000GGGGGGGGG0000G000GGGGGGGG08880000000000G00000088888@8@@@@8@8GCCCCCCCCCCCCLCGGGGGCCCCCCCCLLCCCCCCCCCLCCCLLLCLLCCCCGCCGCCCCCCCCC00CLt111111111111111111111i
ttttttttttttttttttttttttttttt8888888888888888888888888888888@@8888888888888888@@@888888@@88888800G0GGGGGG0000GG000GGGGGGGGG00080000000000000008888G0CGCC8888@@@8GCCCCCCCCCCCGGGCGGCCCCCCCCLLLCCCCCCCCLCCCLLLCLCCCCCGGGCCGCCCCCG00GCL111111111111111111111i
tttttttttttttttttttttttttttttf888888888888888888888888888888888888888888888888@@@8888888@8@888880000GGGG00000G000GGGGGGGGGCGG00000000000000G0880880fCCC8@8888888@8GCCCCCCCC0GGGGGCGCCCCCCCCLLCCCCCCCCCLCLLLLLLLCCCCCGCGCCGGGGCG80CCCL11111111111111111111i
ttttttttttttttttttttttttttttttf88888888888888888888888888888888888888888888888@@88888888@8@@88880000000G00000G0000GGGGGGGGCGGG0000000000000080000088888888888888888@0GCCCG0GGGGGGGCGCCCCLCLLLLCCCCCCCCLLLLLLCLLCCCCCCGCGCGGGGCG80GCCCf1111111111111111111i
ttttttttttttttttttttttttttttttttL888888888888888888888888800000888888888888888@@88888888888@88888000000000000000000G00GGGCCGGGCG800000000008880000GGG00000000000000000880GGGGGGGGGGCCCCCCLCCLCLCCCCLCCCLLLLLLLCLCCCCCCCGCCGGGGG08GGCCCt111111111111111111i
ttttttttttttttttttttttttttttttttttG888888888888888888888888888888888888888888@@888888888888@88888000000000000G000G0GGGGGGGGGGGGCG0000000000800800G0GG0GGG0GG0GGGGGGGGGCCCCGGGGCGGGGGCCCCCCLCLCCLCCCCLCCCLLLLLLCCCCCCCGGGCCGGGGG08GGCCLC111111111111111111i
ttttttttttttttttttttttttttttttttttttG88888888888888888888888888888@8888888888@@8888888@8888@8888800000000000GG0000GGGGGGGGGGGGGCCC088000088800080GGGGGGGGGGGCGGGGGGCGGGCCCCGGGCCCGGGGCCCCCCLCCCLfiLCCLLLCLLLLLCCCCCCCCGCCCCCGGG080GGCLff11111111111111111i
ttttttttttttttttttttttttttttttttttttttG8888888888888888888888888888888888888@@888888888888888888800800000000GG0GGGGGGGGGGCGGGGCCCCCG88888000888880GGGGGGGGGGGGGGGGGGCGCGCGCCGGGGGCGGGGCCCCCCLLCCCt,:;::,;tLLLLLCCCCCCCGGCCCCGGG080GGGCLft1111111111111111i
tttttttttttttttttttttttttttttttttttttfttG88888888888888888888888888888888888@@888888888888888888888000000000G0G00GGGGGGGGGGGGGGCCCCCC0000000008888GGGGGGGGGGGGGCGGGGGCCGGGGGCGGGGGCGGGCCCCCCCLCCCG;::..::.,:iLLCCCCCCCCGGGCCCCG080GGGCCCLf111111111111111i
ttttttttttttttttttttttttttttttttttttttttttC888888888888888@8888888888888888@@8888@88888888888888888088000000G0000GGGGGGGGGGGGGGCGGCCCCG000000088888CGGGGGGGGGGGGCGGGGGGCGGGGGCGGGGGCGGGCCCLLCCLCCCG,;;::;:,:;,LLCCCCCCCGGGGCCCGG8GGGGGCCCLf11111111111111i
tttttttttttttttttttttttttttttttttttttttttttttC8888888888888888888888888888@@@888@@888888888888888088080000000000GGGGGGGGGGGGGGGGGGGCCCCG000000088888GGGGGGGCLLfLGCGGGGGCCGGGGGCGGGGGGCGGCCCLLCCLCCCGGG0GGCLt;;,LCCCCCGGGGGGGCCGG80GGGGGCCLLt1111111111111i
tttttttttttttttttttttttttttttttttttttttttttttttf88888888888888@8@88888@8@@@@88888888888888888888808888888888@@888880000GGGGGGGGGGGGCCCCCCG0G000088888GGGGC0fLLt;fC0000GGGCGGGGGGGGGGGGCGCCCG0LCLCCCCCLCCCCGGGLCCCCCCCCCCGGGGCCCG80GGGGGCCCLLt111111111111i
tttttttttttttttttttttttttttttttttttttttttttttttttG88888888888888@8888888@@@888@@@8888888888888888088888888888888888888888888880GGGGGCGCCCCG0000088888@0GCGGG08880GGGCGGGCGCGGGGGGCGGGGGCCCCG08LCCCLCCCCLLLCGGLCCLCCCCCGCGGGGCCCG800G0GGGCCLLL111111111111i
ttttttttttttttttttttttttttttttttttttttttttttttttttf0888888888888888@@@@@@@888@@8888888888888888880888888888888888888880000000G0GGG08GGGGGCCCG00088008888GGCGCCGGCGGGGGCCGCCCCCGCGGCGGGGGCCCCG00CCCCLCCCCCCCCCLLCLCCCCCGGCGGGGCGG800G0GGGGCCCLf11111111111i
tttttttttttttttttttttttttttttttttttttttttttttttttttt0888888888888@@@@8@@@@88@@@8888888808888888880888888888808888008000000000G0GGGGCGCGGGCCCCG0000808888@8GGCCGCCCCCCCCCCCCCCCCCCGGCGGGCGCCCCG8CCCCCLCCCCCCCLCCLLLCCCCCGCGGGGCGC8000GGGGGGCCLLf1111111111i
tttttttttttttttttttttttttttttttttttttttttttttttttttttf08888888@@@@@@88@@888@@88888888808888888888088800088880800000000000000000GGGGCGGGGCCCCCCG8088808888888CGCCCCCCCCCCCCCCCCCCCCCGCCCCCCCCCG00CGGGCCCCCCCCCLCCLCLLLCCGCGGGGGGG000GGGGGGGCCCLLt111111111i
tttttttttttttttttttttttttttttttttttttttttttttttttttttttt08888@8888888@@88888888808888808888888888000000000000000000000000000G0000GGGGGGGGLCCCCCC0088088888888CCCCCCCCLCCCCCCCCCCCCCCCCCCCCCCCCGG0GGGGCGGCCCCCLCCLLCLLLLGGCGGGGCG00000GG0GGGCCCCLt11111111i
tttttttttttttttttttttttttttttttttttttttttttttttttttttttttC888888888@@@888888888808888808888888888000000000000000000000000000G0000GGGGGGGGCGGGCCLG0008088888888CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC8GGGCGGGGCGCCLCCLLCLLLCGCGGGGCGG8000G0GGGGGCCCLf11111111i
ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt088888@@@88888888888800000808888888888000000000000000000000000000G00000GGGGGGGCGGGGGLCG0080888888880GGCGGGCGCCCCCCCCCCCCCGCCCGCGCCCCCCCG0800GG0G0GGCCCCCCCLCLGGGGGGCGG80000GGGGGGCCLCLf1111111i
ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt08888888888888888888800000008888888888000000000000000000000000000000000GGGGGGGCGGGGCLCG0088888888888GGCCGGGGGGGGGGCGGGGCGCCGCCGGGCCCCCCGCGGGG008880GGGGCCCCCCCGCGGGGCG80000G00GGGCCCCCLt111111i
ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt08888888888888888888800000008888888888000000000000000000000000000000000G00GGGGGGGGGGCGGG0888888888880GGGGCt1L1fLGGCGGGGGCGGGGCGGGGCGGGCCGGCGGGGCGGG088@80CGCCGGCGGGGCG880000GGGGGCGCCCCL111111i
ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt08888888888888880888800000008888088888000000000000000000000000000000000G0000GGGGGGGGGGGGG000088888888GGGC8LftfLC0000GGGGCGGGGCGGGGCGGGCCGGGCGGGCCGGCCG00@@88CGGGGGGGCG800000G0GGGGGGGCCCf11111i
tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttG8888880888808880888000000000088088888800000000000000000000000000000000000000GGGGGGGGGGGGG000008888880GGCGG8888GGGGCGGGGCCGGGCCGGGGCCGCCCGGCGGGGCGCCCGGGG08880GGCGGGGG000000GGGGGGGGGCCCLt1111


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

            <?php if ($exec || $admin) {  ?>
              <h4>Current Registration Status:<div style="color: green; display: inline;"> <?php
               // select exams detail
               $res_users_abc=mysql_query("SELECT * FROM users");
              echo mysql_num_rows($res_users_abc);
              ?></div></h4>
              <table class="mdl-data-table mdl-js-data-table" id="exam_scores"><thead>
              <tr><td width="100%">Name</td><td>Email</td><td>Event 1</td><td>Event 2</td><td>Event 3</td></tr></thead><tbody>
                <?php
                            while ($abcd = mysql_fetch_array($res_users_abc, MYSQL_ASSOC)) {
                                ?>
                                <tr>
                                <td><?php echo $abcd['userFName']; echo " "; echo $abcd['userLName']; ?></td>
                                <td><?php echo $abcd['userEmail'];  ?></td>
                                <td><?php echo strtok($abcd['userEvent1'], '*');  ?></td>
                                <td><?php echo strtok($abcd['userEvent2'], '*');  ?></td>
                                <td><?php echo strtok($abcd['userEvent3'], '*');  ?></td></tr>
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
                            echo $abc["userId"];
                            echo " ";
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
