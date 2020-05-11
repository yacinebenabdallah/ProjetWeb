
<?PHP

include "../entities/coupon.php";
include "../core/couponC.php";


	$coupon=new coupon($_GET['id'],$_GET['type'],$_GET['value'],$_GET['validite']);
	$couponC=new couponC;
	$couponC->modifiercoupon($coupon);

	header('Location: http://localhost/formini/backend/uni-coupon.php');

?>
