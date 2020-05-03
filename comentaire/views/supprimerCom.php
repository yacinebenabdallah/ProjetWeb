<?PHP
include "../core/comC.php";
$comC1=new comC();
if (isset($_GET["id"])){
	$comC1->supprimercom($_GET["id"]);
	header("Location: http://localhost/Formini/comentaire.php");
}

?>