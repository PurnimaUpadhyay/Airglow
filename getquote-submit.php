  <?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;

if (isset($_POST) && !empty($_POST)) {

	// $origin = $_POST['origin'];
	// $shipment = $_POST['shipment'];
	// $cargo = $_POST['cargo'];
	// $destination = $_POST['destination'];
	// $commodity = $_POST['commodity'];
	// $packages = $_POST['packages'];
	// $weight = $_POST['weight'];
	// $dimesions = $_POST['dimesions'];
	$get_name = $_POST['get_name'];
	$company_name = $_POST['company_name'];
	$tel_no = $_POST['tel_no'];
	$get_email = $_POST['get_email'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$quote_msg = $_POST['quote_msg'];

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
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
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

	$inqtype = "Get A Quote";
	// $to = "santosh@togglehead.in";
	$to = "sales@airglowaviation.com";
	$to .= ",purnima@togglehead.in";

	$subject = "Email From Airglow" . " " . $inqtype;
	$message = "Get A Quote:\r\n" . "\n"
		// . " Origin : " . $origin . "\n"
		// . "\r\n Type of Shipment : " . $shipment . "\n"
		// . "\r\n Type of Cargo : " . $cargo . "\n"
		// . "\r\n Destination : " . $destination . "\n"
		// . "\r\n Commodity : " . $commodity . "\n"
		// . "\r\n Number of Packages : " . $packages . "\n"
		// . "\r\n Gross Weight : " . $weight . "\n"
		// . "\r\n Dimesions : " . $dimesions . "\n"
		. "\r\n Name : " . $get_name . "\n"
		. "\r\n Company Name : " . $company_name . "\n"
		. "\r\n Telephone No : " . $tel_no . "\n"
		. "\r\n E-mail : " . $get_email . "\n"
		. "\r\n Country : " . $country . "\n"
		. "\r\n State : " . $state . "\n"
		. "\r\n City : " . $city . "\n"
		. "\r\n Message : " . $quote_msg . "\n";



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
header("Location: thank-you.php?message=get_quote");
die();
?>