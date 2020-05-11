<?php
include_once __DIR__."/../core/couponC.php";
$id=$_GET["coupon"];

$coupon1C=new couponC();
$listecoupons=$coupon1C->verifiercoupon($id);


if($listecoupons==0)
{
    header("Location: http://localhost/Formini/CartMedone.php");
}
else
{
    if(!empty($_GET['couponf']))
    {
        $listecoupons = $coupon1C->recuperercoupon($_GET["coupon"]);

        foreach ($listecoupons as $row) {
            if ($row['type'] != 3) {
        $coupon=$_GET['couponf'];
        header("Location: http://localhost/Formini/CartMedone.php?couponf=$coupon&coupon=$id");
            }else
            {
                $coupon=$_GET['couponf'];
                header("Location: http://localhost/Formini/CartMedone.php?couponf=$coupon");
            }

            }

    }
    else

    header("Location: http://localhost/Formini/CartMedone.php?coupon=$id");

}







?>