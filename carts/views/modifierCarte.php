
<?PHP
include_once "../entities/carte.php";
include_once  "../core/cartec.php";
	

     $carteC=new cartec();

	$carte=new carte($_GET['idcarte'],$_GET['idU'],$_GET['ty'],$_GET['debut'],$_GET['fin']);
	$carteC->modifierCarte($carte,$_GET['idcarte']);
	header('Location: ../../../backend/uni-carts.php');

?>



