<?PHP
include "../core/blogC.php";

if(isset($_GET['rech'])){
	$blog1C=new blogC();
	$listeblog=$blog1C->rechercheBlog($_GET['rech']);
}

//var_dump($listeEmployes->fetchAll());
?>
<table border="1" width="500px" align="center">
<caption><h1>liste des BLOGs</h1></caption>
<tr>
	<td colspan="8" align="right"> 
		<form method="GET" action="rechercheBlog.php">
			  <input type="text"  name="rech">
			  <input type="submit" name="recherche"value="recherche">
		  
		</form>	
		
	</td>
</tr>
	

<tr>
<td>id</td>
<td>titre</td>
<td>article</td>
<td>image</td>
<td>hachtag</td>
<td>categorie</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeblog as $row){
	?>
	
	<tr>
	<td>****<?PHP #echo $row['id']; ?></td>
	<td><?PHP echo $row['titre']; ?></td>
	<td><?PHP echo $row['article']; ?></td>
	<td><img src="../images/<?PHP echo $row['image']; ?>" style="width: 50px "></td>
	<td>#<?PHP echo $row['hachtag']; ?></td>
	<td><?PHP echo $row['categorie']; ?></td>

	<td>
        <form method="POST"
              action="supprimerBlog.php">	
           <button type="submit" name="supprimer" value="supprimer">supprimer</button>
			<input hidden  value="<?PHP echo $row['id']; ?>" name="id">
		</form>
	</td>
	<td>
		<a href="modifierBlog.php?id=<?PHP echo $row['id']; ?>"><button>modifier</button></a>
	</td>
	</tr>
	<?PHP
}
?>
<tr></tr>
<tr>
	<td colspan="8">
		<a href="index.html"><button type="submit" name="ajouter_b">ajouter BLOG</button></a>
		<a href="afficherBlog.php"><button type="submit" name="afficherblog">afficher BLOG</button></a>
	</td>
</tr>

</table>

