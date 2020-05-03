<?PHP
include __DIR__."/../core/avisC.php";
$avis1C=new avisC();
$listeavis=$avis1C->afficherAviss();

//var_dump($listeEmployes->fetchAll());

foreach($listeavis as $row  ){

	?>
	
	                            <div class="col-md-4 col-sm-6 col-xs-20">
                                     <div class="single-blog mb-20">
                                          
                                            <h4 ">*Utilisateur :<?= $row['nom'] ?> <?= $row['prenom'] ?> </h4>
                                             <h4 >*E_Mail :  <a href="#"><?= $row['email'] ?></a></h4>
                                             <h4 >*Message : <?= $row['message'] ?></h4> 
                                            <h4 class="blog-content">*Note :<?= $row['note'] ?></h4> 
                                            <h4 class="blog-content">*Id article notée :<?= $row['id_article'] ?></h4> 
                                           

                                          <!--  <a href="blo-blog-edit.php?id=<?=$row['id']?>" class="btn btn-primary"><span>Modifier</span>  &nbsp; <i class="fa fa-wrench"></i></a>  
                                            
                                            <span class='team-member-edit'><a href="http://localhost/Formini/php/avis/views/supprimerAvis.php?id=<?=$row['id']?>"><i class='fa fa-trash-o'></i></a></span> --> 

                                            <a href="http://localhost/Formini/php/avis/views/supprimerAvis.php?id=<?=$row['id']?>" class="btn btn-danger"><i class="fa fa-trash-o">&nbsp;Supprimer</i></a>
                                             

                                    </div>
                                </div>

                                   


                   
<?PHP

}
?>





