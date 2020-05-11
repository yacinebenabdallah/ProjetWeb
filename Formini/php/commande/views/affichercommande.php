<?PHP

include __DIR__."/../core/commandeC.php";
$commande1C=new commandeC();
$listecommandes=$commande1C->affichercommandes();


foreach($listecommandes as $row){
	?>


	<tr>
	<td><?=$row['id']?></td>
	<td><?=$row['idu']?></td>
	<td><?=$row['etat']?></td>
	<td><?=$row['price']?>$</td>
	<td><a href="http://localhost/Formini/php/commande/views/supprimercommande.php?id=<?PHP echo $row['id']; ?>&idu=<?PHP echo $row['idu']; ?>&etat=<?PHP echo $row['etat']; ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> </a></td>
	<td><a href="http://localhost/Formini/facture/facture.php?id=<?=$row['id']?>&idu=<?=$row['idu']?>&etat=<?=$row['etat']?>&som=<?=$row['price']?>" class="btn btn-default btn-sm"><i class="fa fa-file-text-o"></i> </a></td>
    

	</tr>
	
	
<?php	

}
?>