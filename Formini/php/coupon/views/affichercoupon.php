<?PHP
include __DIR__."/../core/couponC.php";
$coupon1C=new couponC();
$listecoupon=$coupon1C->affichercoupons();



foreach($listecoupon as $row){

	?>
	<tr>
	<td><?php echo $row['id']?></td>
	<td><?php if($row['type']==1) echo "Check"; else if($row['type']==2) echo "Pourcentage"; else echo "Formation" ?></td>
	<td><?php if($row['type']==1) echo '$'; else if($row['type']==2)  echo '%' ; echo $row['value']?></td>
	<td><?php if($row['validite']==1) echo "permanent"; else echo "temporary"; ?></td>
	<td><a href="http://localhost/Formini/php/coupon/views/supprimercoupon.php?id=<?PHP echo $row['id']; ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> </a></td>
	<td><a href="http://localhost/formini/backend/uni-coupon-edit.php?id=<?=$row['id']?>&type=<?=$row['type']?>&value=<?=$row['value']?>&validite=<?=$row['validite']?>" class="btn btn-default btn-sm"><i class="fa fa-wrench"></i> </a></td>
	</tr>
	<?PHP
}
?>






