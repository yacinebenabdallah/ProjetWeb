<?PHP
include __DIR__."/../core/panierC.php";
$panier1C=new panierC();
$listepanier=$panier1C->afficherpaniersback();

$somme=0;

foreach($listepanier as $row){
    if(($row['etat']==$_GET['etat']) && ($row['id']==$_GET['idu']))
	{

	?>
          <tr>
          <td><?=$row['idf']?></td>
          <td><?=$row['name']?></td>
          <td><?php echo $row['price']; $somme=$somme+$row['price'];?>$</td>

          </tr>
	<?PHP
}
}
?>
