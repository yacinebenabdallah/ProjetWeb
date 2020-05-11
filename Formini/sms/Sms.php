<?php

	require $_SERVER['DOCUMENT_ROOT'] . '/sms/vendore/autoload.php' ;

	$MessageBird = new \MessageBird\Client('YRHAbMXsGpTpKCqJibJ39nLPa');
	$Message 	 = new \MessageBird\Objects\Message();
	$Message->originator = 'Formini TN';
	$Message->recipients = array(+21653888628);
	$Message->body 		 = 'Hello Sir ! We are glad that you are going to join us in this adventure'

?>