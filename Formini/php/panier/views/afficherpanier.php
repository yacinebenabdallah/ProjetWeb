


<?PHP

include __DIR__."/../core/panierC.php";
$panier1C=new panierC();
$listepaniers=$panier1C->afficherpaniers();

?>

<?PHP
foreach($listepaniers as $row){
	if($row['etat']==0)
	{
	?>
	<tr>
	<td><span><?PHP echo $row['idf']; ?></span></td>
	<td>
		<a href="#"><?PHP echo $row['name']; ?></a>
	</td>
	<td><span>$<?PHP echo $row['price']; ?></span></td>
	<td scope="row" class="text-center">
		<a data-original-title="Remove from cart" data-placement="top" data-toggle="tooltip" href="#" title=""></a>
		<a href="http://localhost/Formini/php/panier/views/supprimerpanier.php?id=<?PHP echo $row['idf']; ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> </a>
	</td>
</tr>
	
<?php	
}
}
?>