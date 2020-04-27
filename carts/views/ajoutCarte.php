<?PHP
include_once __DIR__."/../entities/carte.php";
include_once __DIR__."/../core/cartec.php";

//require $_SERVER['DOCUMENT_ROOT'].'/Formini/php/carts/views/vendor/autoload.php';



$carte1C=new cartec();
$carte1C->ajouterCarte($_POST['id']);





  //$MessageBird = new \MessageBird\Client('PGbUUZzPmUz3QKMqyuGjwa6wB');
  //$Message = new \MessageBird\Objects\Message();
  //$Message->originator = 'MessageBird';
  //$Message->recipients = array(+21699692298);
  //$Message->body = 'Felicitations , vous avez la carte';
  //$MessageBird->messages->create($Message);



?>