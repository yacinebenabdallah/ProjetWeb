<?PHP
session_start();
include "../core/panierC.php";
$panierC=new panierC();
if (isset($_GET["id"])){
	$panierC->supprimerpanier($_GET["id"]);
	header('Location: http://localhost/Formini/CartMedone.php');
}

?>

