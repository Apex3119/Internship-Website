<?php
// ini_set('display_errors', 1);

// ini_set('display_startup_errors', 1);

// error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();										 
	$mail->Host	 = 'smtp.gmail.com';				 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'dmrcinternship@gmail.com';				 
	$mail->Password = 'upkjqwfshlqjfkuv';					 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	$mail->setFrom('dmrcinternship@gmail.com', 'DMRC');		 
	$mail->addAddress('deepanshu11130@gmail.com');
	// $mail->addAddress('receiver2@gfg.com', 'Name');
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Subject';
	$mail->Body = $text "Subject: Invitation for Front End Developer Role Interview

		Dear Deepanshu,
		
		I hope this email finds you well. I am writing to extend an invitation to you for an interview for the Front End Developer role at [Your Company Name]. Your profile has caught our attention, and we believe that your skills and experiences align well with what we are looking for in a candidate.
		
		Position: Front End Developer
		Date: [Insert Interview Date]
		Time: [Insert Interview Time]
		Location: [Insert Interview Location, if in-person, or specify if its virtual]
		
		During the interview, you will have the opportunity to discuss your background, experiences, and interests in more detail. We are particularly interested in hearing about your expertise in front end development technologies, your approach to problem-solving, and any projects you have worked on that demonstrate your capabilities in this area.
		
		Please come prepared to discuss:
		
		Your experience with HTML, CSS, and JavaScript.
		Any frameworks or libraries you are proficient in (e.g., React, Angular, Vue.js).
		Previous projects or experiences where you have demonstrated strong front end development skills.
		Your understanding of responsive design principles and best practices.
		Any challenges you have faced in previous roles and how you overcame them.
		If the proposed interview date and time are inconvenient for you, please let us know, and we will do our best to accommodate your schedule.
		
		To confirm your availability for the interview, please reply to this email at your earliest convenience. Additionally, if there are any specific documents or materials you would like to bring to the interview, feel free to mention them in your response.
		
		We are excited about the possibility of having you join our team and look forward to meeting you soon. If you have any questions or need further information before the interview, please dont hesitate to reach out.
		
		Best regards,
		DMRC Team."
		

	
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
