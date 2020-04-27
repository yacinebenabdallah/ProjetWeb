<?PHP
include "../core/utilisateurc.php";
$utilisateur1C=new utilisateurc();
$listeUtilisateur=$utilisateur1C->afficherUtilisateurs();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>ID</td>
<td>Nom</td>
<td>Prenom</td>
<td>Email</td>
<td>Age</td>
<td>Profession</td>
<td>NumTelephone</td>
<td>City</td>
<td>Password</td>
<td>ConfirmPasword</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeUtilisateur as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['age']; ?></td>
	<td><?PHP echo $row['profession']; ?></td>
	<td><?PHP echo $row['numTelephone']; ?></td>
	<td><?PHP echo $row['city']; ?></td>
	<td><?PHP echo $row['password']; ?></td>
	<td><?PHP echo $row['confirmPassword']; ?></td>

	<td><form method="POST" action="suprimerUtilisateur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierUtilisateur.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>