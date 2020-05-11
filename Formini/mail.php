
<?php

	//require $_SERVER['DOCUMENT_ROOT'] . '/Formini/sms/vendor/autoload.php' ;
 

include ('C:/xampp/htdocs/Formini/php/event/core/eventManager.php') ;

//var_dump(__DIR__) ;

$manager =new eventManager () ;

$reponse=$manager->recupererEvent($_GET['id']) ;

$data=$reponse->fetch() ;

$nb=$data['NbPlace'];

$name = $_POST['name'];
$to_email = $_POST['email'];	

// create email body and send it	
$subject = "Hello  $name".
		   " A seat is waiting for you ";
$body = "Hello $name, we are glad that you joined us in this adventure \n".
			  "Here are the details: \n \n The event will be at ******* \n\n  ".
		      "Location : ****** \n \n The event subject \n ********* ";
$headers="From: Formini : Online Education <ForminiTN@gmail.com>";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";

   $nb=$nb-1; 
   $manager->modifierNbPlace($event) ;

	 header("Location: http://localhost/Formini/event.php");

} 
else {
    echo "Email sending failed...";
}


 //$MessageBird = new \MessageBird\Client('YRHAbMXsGpTpKCqJibJ39nLPa');
  //$Message = new \MessageBird\Objects\Message();
  //$Message->originator = 'ForminiTN';
  //$Message->recipients = array(+21653888628);
  //$Message->body = 'Hello Sir ! We are glad that you are going to join us in this adventure';

  //$MessageBird->messages->create($Message);


?>
