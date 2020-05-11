<?PHP
include "../entities/coupon.php";
include "../core/couponC.php";

if (isset($_GET['id']) and isset($_GET['type']) and isset($_GET['value'])and isset($_GET['validite'])){
$coupon1=new coupon($_GET['id'],$_GET['type'],$_GET['value'],$_GET['validite']);

$coupon1C=new couponC();

$listecoupons=$coupon1C->verifiercoupon($_GET['id']);
if($listecoupons==0)
{
	$coupon1C->ajoutercoupon($coupon1);
	header('Location: http://localhost/formini/backend/uni-coupon.php');

}else

{
	$link=$_GET['id'];
	header("Location: http://localhost/formini/backend/uni-coupon-add.php?error=$link");
}



	
}else{
	echo "vérifier les champs";
}
//*/

?>

