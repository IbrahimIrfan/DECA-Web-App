<?php
$title = $_POST['title'];
$body = $_POST['body'];
$email = $_POST['email'];
$clusterManaging = $_POST['cm'];

$emailbody = "A new DECA ".$clusterManaging." announcement was posted:<br><br>".$title."<br><br>".$body."<br><br>More cluster-wide announcements: www.irhsdeca.com/dashboard.php<br><br>More chapter-wide announcements: www.irhsdeca.com/announcements.php<br><br>- The IRHS DECA Team";
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'irhsdeca2016@gmail.com';
$mail->Password = 'DECA2016';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom('irhsdeca2016@gmail.com', 'IRHS DECA');
$mail->addAddress($email);
$mail->isHTML(true);           // Set email format to HTML
$mail->Subject = 'New DECA Announcement: '. $title;
$mail->Body    = $emailbody;

if(!$mail->send()) {
  $errMSG = 'Mailer Error: ' . $mail->ErrorInfo;
}
 ?>
