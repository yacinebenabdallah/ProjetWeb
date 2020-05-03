<?PHP
include __DIR__."/../core/comC.php";
$com1C=new comC();
$listecom=$com1C->affichercoms();

//var_dump($listeEmployes->fetchAll());


foreach($listecom as $row  ){

    ?>
    
                   <div class="col-md-4 col-sm-6 col-xs-20">
                        <div class="single-blog mb-60">
                         
                            <div class="blog-content" >
                                <div class="blog-bottom">
                                    <img src="php/comentaire/images.png" width="50px">
                                    <h2 style="font-size: 15px">* Nom et Prénom : </h2>  <p><?=$row['nom'] ?> <?= $row['prenom'] ?> </p><br>
                                    <h2 style="font-size: 15px">* Objet :</h2>    <p><a href="comentaire.php?id=<?=$row['id'] ?>"><?=$row['objet'] ?> </a></p> <br>
                                    <h2 style="font-size: 15px">* Votre Commentaire : </h2> <p>  <?=$row['comentaire'] ?> </p><br>

                                    <a  href="http://localhost/Formini/php/comentaire/views/supprimerCom.php?id=<?=$row['id']?>" class="btn btn-labeled btn-default"><i class="fa fa-trash"></i>&nbsp; supprimer</a>
                                     
                                </div>
                            </div>
                        </div>
                     </div>    




                   
<?PHP

}
?>





