<?PHP
include "../entities/panier.php";
include "../core/panierC.php";

if (isset($_GET['id']) and isset($_GET['id_formation']))
{
$panier1=new panier($_GET['id'],$_GET['id_formation']);

$panier1C=new panierC();
$panier1C->ajouterpanier($panier1);

if(isset($_GET['id_coupon']))
{
	$link=$_GET["id_coupon"];
	
	header("Location: http://localhost/Formini/CartMedone.php?couponf=$link");
}
else{

	header('Location: http://localhost/Formini/CartMedone.php');
}



	
}else{
	echo "vérifier les champs";
}
//*/

?>