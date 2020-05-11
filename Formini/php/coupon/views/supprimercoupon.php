<?PHP
include __DIR__."/../core/couponC.php";
$couponC=new couponC();
if (!empty($_GET['coupon'])){
	$listecoupon=$couponC->recuperercoupon($_GET['coupon']);
	foreach($listecoupon as $row)
	{
		if($row['validite']==2)
		{
			$couponC->supprimercoupon($_GET['coupon']);
			

		}


	}



	
	
}
else if (isset($_GET['id']))
{
	
	
			$couponC->supprimercoupon($_GET['id']);

	


	

			header ('location: http://localhost/formini/backend/uni-coupon.php');

	
	
} 
if (isset($_GET['couponf']))
{
	$listecoupon=$couponC->recuperercoupon($_GET['couponf']);
	foreach($listecoupon as $row)
	{
		if($row['validite']==2)
		{
			$couponC->supprimercoupon($_GET['couponf']);
			
			

		}


	}
}



?>