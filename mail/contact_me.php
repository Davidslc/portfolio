<?php
// Check for empty fields
//if(empty($_POST['name'])  		||
//   empty($_POST['email']) 		||
//   empty($_POST['phone']) 		||
//   empty($_POST['message'])	||
//   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//   {
//	echo "No arguments Provided!";
//	return false;
//  }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'djjohnsonslc@gmail.com'; // Add your email address in-between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.". PHP_EOL ."Here are the details: ". PHP_EOL ."Name: $name". PHP_EOL ."Email: $email_address". PHP_EOL ."Phone: $phone". PHP_EOL ."Message: ". PHP_EOL ."$message";
$headers  = 'MIME-Version: 1.0' . PHP_EOL;
$mail_status = mail($to, $email_subject, $email_body, $headers);
?>
<p>Success! Body: <?php echo $email_body ?> Status: <?php echo $mail_status ?> </p>
<?php
?>