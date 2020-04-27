<?php 


require __DIR__ . '/../core/cartec.php' ;
$carte1C =new cartec () ;
$reponse=$carte1C->afficherCartes() ;




while($data=$reponse->fetch())
{
?>
     
     
     
     
     
     
     
     <div class="col-lg-3 col-sm-6 col-md-4 music_genre">
                                                <div class="team-member ">
                                                    <div class="team-img ">
                                                        <img class="img-responsive" src="../img/people/110/<?=$data['image'] ?>" alt="">
                                                    </div>                         <div class="team-info ">
                                                       


                                                        <span class='team-member-edit'><a href="uni-cart-edit.php?idcarte=<?= $data['idcarte']?>"><i class='fa fa-pencil icon-xs'></i></a></span>
                                                        



                                                        

                                                      
                                                        <br>
                                                        <span><small>ID: </small><strong><?= $data['idcarte']  ?>
                                                    </br> 
                                                    <br>
                                                        <span><small>Montant: </small><strong><?= $data['montant']  ?>
                                                    </br>
                                                    <br>
                                                        <span><small>IDutilisateur: </small><strong><?= $data['idUtilisateur']  ?>
                                                    </br>
                                                       
                                                        
                                                    </div>

                                                    <p>
                                                </div>
                                            </div>
 <?php
}
 ?>               
