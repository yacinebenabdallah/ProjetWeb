<?PHP
include "../core/avisC.php";
$avisC1=new avisC();
if (isset($_GET["id"])){
	$avisC1->supprimeravis($_GET["id"]);
	header("Location: http://localhost/Formini/backend/uni-avis.php");
}

?>