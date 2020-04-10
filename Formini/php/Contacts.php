<?php	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$email_subject = $_POST['subject'];	

// create email body and send it	
$to = 'ForminiTN@gmail.com'; //Just write your email, no more :)
$email_sub = "Contact form submitted by:  $name".
			 "The subject is : $email_subject ";
$email_body = "You have received a new message. <br/>".
			  "Here are the details: <br/><br/> Name: $name <br/><br/>  ".
		      "Email: $email_address <br/><br/> Message: <br/> $message";
$headers="From:<$email_address>\n";
$headers.="Content-Type:text/html; charset=UTF-8";
if($email_address != "") {
	mail($to,$email_sub,$email_body,$headers);
	return true;

}

?>
