<?PHP
session_start();
include "../core/commandeC.php";
include __DIR__."/../../panier/core/panierC.php";
$panierC=new panierC();
$commandeC=new commandeC();
if (isset($_GET["id"]) && isset($_GET["idu"]) && isset($_GET["etat"])){
	$panierC->supprimerpaniers($_GET["etat"],$_GET["idu"]);
	$commandeC->supprimercommande($_GET["id"]);
	header ('location: http://localhost/formini/backend/uni-order.php');
}

?>

