<?PHP
include __DIR__."/../entities/commande.php";
include __DIR__."/../core/commandeC.php";



$commande1=new commande($_SESSION['id'],$date,$prix);

$commande1C=new commandeC();
$commande1C->ajoutercommande($commande1);

	


?>