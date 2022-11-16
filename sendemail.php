
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("Exception.php");
require("PHPMailer.php");
require("SMTP.php");
		



			$mailTo = "bambarovie_bsit@plmun.edu.ph";
			$body = "<h1>New Registation!</h1>";
			
			$mail = new PHPMailer();
			
		    $mail->SMTPDebug = 3;
			
			$mail->isSMTP();
			$mail->Mailer = "smtp";
			$mail->Host = "mail.smtp2go.com";
			$mail->Port = "2525";
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'tls';
			$mail->Username = "HCIEventManagement";
			$mail->Password = "EventManagementSystem";
			$mail->From = "bambarovie@gmail.com";
			$mail->FromName = "Registration!";
			$mail->addAddress($mailTo, "Admin");
			
			$mail->isHTML(true);
			
			$mail->Subject = "New Registration!";
			$mail->Body = $body;
			$mail->AltBody = "This is the plain text version of the mail content";
			
			 if(!$mail->send()){ 
			   echo "Mailer Error: ". $mail->ErrorInfo;
			 }
			 else{
			
			   echo "Message has been sent";
			
			
			 } 
?>