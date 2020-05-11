<?PHP
session_start();
include "../core/panierC.php";
$prix=$_GET['prix'];
if($prix>0)
{
$panierC=new panierC();

$listepaniers=$panierC->sommepanier();



foreach($listepaniers as $roa)
{
    $somme=$roa['som'];
}

$date=date("Y-m-d H:i:s");



$panierC->acheterpanier($date);


require __DIR__."/../../commande/views/ajoutercommande.php";

if(!empty($_GET["coupon"]) || isset($_GET["couponf"]) )
{
    require __DIR__."/../../coupon/views/supprimercoupon.php";

}



require_once __DIR__."/../../commande/views/imprimercommande.php";


}
else
{
    header("Location: http://localhost/Formini/CartMedone.php");
}


?>