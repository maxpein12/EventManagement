<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("Exception.php");
require("PHPMailer.php");
require("SMTP.php");
		



			
	// $mailTo = "cervantesangelomaro_bsit@plmun.edu.ph";
			$body = "<h1>New Registation for Event!</h1>";
			$mail = new PHPMailer(true);
			
		    // $mail->SMTPDebug = 3;
			
			$mail->isSMTP();
			$mail->Mailer = "smtp";
			$mail->Host = "smtp.gmail.com";
			$mail->Port = "465";
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'ssl';
			$mail->Username = "hcieventmanagement@gmail.com";
$mail->Password = "mnguskmczpxmvkyt";
$mail->setFrom = "Event Managent HCI";
			$mail->FromName = "Registration!";
			$mail->addAddress("hcieventmanagement@gmail.com");
			
			$mail->isHTML(true);
			
			$mail->Subject = "New Registration for Event!";
			$mail->Body = $body;
			$mail->AltBody = "This is the plain text version of the mail content";
			$mail->send();
			//  if(!$mail->send()){ 
			   
			//  }
			//  else{
			
			   
			
			
			//  } 


						// $mailTo = "cervantesangelomaro_bsit@plmun.edu.ph";
			// $body = "<h1>New Registation for Audience!</h1>";

			// $mail = new PHPMailer();
			
		    // // $mail->SMTPDebug = 3;
			
			// $mail->isSMTP();
			// $mail->Mailer = "smtp";
			// $mail->Host = "mail.smtp2go.com";
			// $mail->Port = "2525";
			// $mail->SMTPAuth = true;
			// $mail->SMTPSecure = 'tls';
			// $mail->Username = "HCIEventManagement";
			// $mail->Password = "EventManagementSystem";
			// $mail->From = "bambarovie@gmail.com";
			// $mail->FromName = "Registration!";
			// $mail->addAddress($mailTo, "Admin");
			
			// $mail->isHTML(true);
			
			// $mail->Subject = "New Registration for Event!";
			// $mail->Body = $body;
			// $mail->AltBody = "This is the plain text version of the mail content";
			
			//  if(!$mail->send()){ 
			   
			//  }
			//  else{
			
			   
			
			
			//  } 
?>


<div class="container-fluid">
	<p>We will contact you soon for the verification of your book request. Thank you</p>
</div>
<div class="modal-footer display">
	<div class="row">
		<div class="col-md-12">
			<button class="btn btn-secondary float-right" type="button" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
<style>
	#uni_modal .modal-footer{
		display: none;
	}
	#uni_modal .modal-footer.display{
		display: block;
	}
</style>