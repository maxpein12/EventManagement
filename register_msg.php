

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("Exception.php");
require("PHPMailer.php");
require("SMTP.php");
		



			$mailTo = "bambarovie_bsit@plmun.edu.ph";
			$body = "<h1>New Registation for Audience!</h1>";
			
			$mail = new PHPMailer();
			
		    // $mail->SMTPDebug = 3;
			
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
			
			$mail->Subject = "New Registration for Audience!";
			$mail->Body = $body;
			$mail->AltBody = "This is the plain text version of the mail content";
			
			 if(!$mail->send()){ 
			   
			 }
			 else{
			
			   
			
			
			 } 
?>

<div class="container-fluid">
	<p>We will contact you soon for the verification of your registration request. Thank you</p>
</div>
<div class="modal-footer display">
	<div class="row">
		<div class="col-md-12">
			<button class="btn btn-secondary float-right"  type="button" data-dismiss="modal">Close</button>
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
