<?PHP
include "../core/cartec.php";
$carte1C=new cartec();
$listeCarte=$carte1C->afficherCartes();


?>
<table border="1">
<tr>
<td>ID</td>
<td>IdUtilisateur</td>
<td>Montant</td>


</tr>

<?PHP
foreach($listeCarte as $row){
	?>
	<tr>
	<td><?PHP echo $row['idcarte']; ?></td>
	<td><?PHP echo $row['idUtilisateur']; ?></td>
	<td><?PHP echo $row['montant']; ?></td>
	
	

	<td><form method="POST" action="suprimerCarte.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idcarte']; ?>" name="idcarte">
	</form>
	</td>
	<td><a href="modifierCarte.php?idcarte=<?PHP echo $row['idcarte']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>