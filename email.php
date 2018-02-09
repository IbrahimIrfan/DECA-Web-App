<?php
	$title = mysql_real_escape_string($_POST['title']);
	$body = mysql_real_escape_string($_POST['body']);
	$email = mysql_real_escape_string($_POST['email']);
	$clusterManaging = mysql_real_escape_string($_POST['cm']);

	$emailbody = "A new DECA ".$clusterManaging." announcement was posted:<br><br>".$title."<br><br>".$body."<br><br>More cluster-wide announcements: www.irhsdeca.com/dashboard.php<br><br>More chapter-wide announcements: www.irhsdeca.com/announcements.php<br><br>- The IRHS DECA Team";
	
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'irhsdeca2016@gmail.com';
	$mail->Password = '----------';
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
