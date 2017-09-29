  <?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;

if (isset($_POST) && !empty($_POST)) {

	$uname = $_POST['uname'];
	$uemail = $_POST['uemail'];
	$uphone = $_POST['uphone'];
	$msg = $_POST['umessage'];
	$pos = $_POST['position'];

	// upload code

	$target_dir = "uploads/";
	$target_file = $target_dir . '' . microtime() . basename($_FILES["upload"]["name"]);
	$uploadOk = 1;
	$imageresumeFileType = pathinfo($target_file, PATHINFO_EXTENSION);

	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
// Check file size
	if ($_FILES["upload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
// Allow certain file formats
	if ($imageresumeFileType != "jpg" && $imageresumeFileType != "png" && $imageresumeFileType != "jpeg" && $imageresumeFileType != "gif" && $imageresumeFileType != "pdf" && $imageresumeFileType != "docx") {
		echo "Sorry, only JPEG, PNG, Doc, PDF files are allowed.";
		$uploadOk = 0;
	}
// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
			echo "The file " . basename($_FILES["upload"]["name"]) . " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}

// upload code end

	/* $to =  Send mail to Inquiri Id's BD team + heads for BI*/

	$inqtype = "Job Contact";
	// $to = "santosh@togglehead.in";
	$to = "cargo@airglowaviation.com";
	$to .= ",purnima@togglehead.in";

	$subject = "Email From Airglow Website For" . " " . $inqtype;
	$message = "Airglow Career Form Details:\r\n" . "\n"
		. " Name : " . $uname . "\n"
		. "\r\n Email : " . $uemail . "\n"
		. "\r\n Phone : " . $uphone . "\n"
		. "\r\n Message : " . $msg . "\n"
		. "\r\n Position : " . $pos . "\n";

	$from = "info@togglehead.in";
	$headers = "From:" . $from;

	$mgClient = new Mailgun('key-a2ab100d376ffa2631c3aceaed961438');
	$domain = "emails.togglehead.in";

	$result2 = $mgClient->sendMessage($domain, array(
		'from' => $from,
		'to' => $to,
		'subject' => $subject,
		'text' => $message,
	), array(
		'attachment' => array($target_file),
	));

}
header("Location: thank-you.php?message=career");
die();
?>