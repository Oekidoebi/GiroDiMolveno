<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$aanbod = $_POST['aanbod'];
$dag = $_POST['dag'];
$maand = $_POST['maand'];
$jaar = $_POST['jaar'];
$dagen = $_POST['dagen'];
$groepsgrootte = $_POST['groepsgrootte'];

// Create the email and send the message
$to = 'info@venividifietsie.com'; //  Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
//$to = 'van_ulzen@hotmail.com'; //  Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message\n\nAanbod: $aanbod\n\nAankomst: $dag - $maand - $jaar\n\nDagen: $dagen\n\nGroepsgrootte: $groepsgrootte";
$headers = "From: noreply@venividifietsie.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>