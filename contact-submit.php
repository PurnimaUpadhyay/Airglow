  <?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;

if (isset($_POST) && !empty($_POST)) {

	$con_name = $_POST['con_name'];
	$con_no = $_POST['con_no'];
	$con_email = $_POST['con_email'];
	$con_msg = $_POST['con_msg'];



	/* $to =  Send mail to Inquiri Id's BD team + heads for BI*/

	$inqtype = "Contact Enquiry";
	//$to = "santosh@togglehead.in";
	$to = "info@airglowaviation.com";
	$to .= ",purnima@togglehead.in";

	$subject = "Email From Airglow Website For" . " " . $inqtype;
	$message = "Airglow Contact Form Details:\r\n" . "\n"
		. " Name : " . $con_name . "\n"
		. "\r\n Email : " . $con_email . "\n"
		. "\r\n Phone : " . $con_no . "\n"
		. "\r\n Message : " . $con_msg . "\n";

	$from = "info@togglehead.in";
	$headers = "From:" . $from;

	$mgClient = new Mailgun('key-a2ab100d376ffa2631c3aceaed961438');
	$domain = "emails.togglehead.in";

	$result2 = $mgClient->sendMessage($domain, array(
		'from' => $from,
		'to' => $to,
		'subject' => $subject,
		'text' => $message,
	));

}
header("Location: thank-you.php?message=contact");
die();
?>