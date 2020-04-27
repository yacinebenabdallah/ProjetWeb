<?php 

require __DIR__ . '/../core/utilisateurc.php' ;

$utilisateur1C =new utilisateurc () ;

$reponse=$utilisateur1C->afficherUtilisateurs() ;

if (isset($_GET['search']))
{



while($data=$reponse->fetch())
{
     if (($_GET['search']==$data['id']  )||( $_GET['search']==$data['nom'] ))
        {


?>
     
     
     
     
     <div class="col-lg-3 col-sm-6 col-md-4 music_genre">
                                                <div class="team-member ">
                                                    <div class="team-img ">
                                                        <img class="img-responsive" src="../img/people/110/<?=$data['image'] ?>" alt="">
                                                    </div>                         <div class="team-info ">
                                                        <h4>


                                                            <a href="uni-student-profile.html">
                                                            <?= $data['nom'] ?></a>


                                                        </h4>

                                                        <span class='team-member-edit'><a href="uni-student-edit.php?id=<?= $data['id']?>"><i class='fa fa-pencil icon-xs'></i></a></span>
                                                        



                                                        <span class='material-icons' ><a class="material" href="../php/users/views/supprimerUtilisateur.php?id=<?= $data['id']?>">delete</a></span>

                                                       
                                                        <br>
                                                        <span><small>Profession: </small><strong><?= $data['profession']  ?></strong> <small>ID STUDENT: </small><?= $data['id']  ?></span>
                                                        <br>
                                                        <span><small>NAME.:</small> <strong><?= $data['nom']  ?></strong></span>
                                                        <br>
                                                       
                                                    </div>

                                                    <p>
                                                </div>
                                            </div>
                                             <?php
}
}
}
else {
while($data=$reponse->fetch())
{
?>
     
     
     
     
     
     <div class="col-lg-3 col-sm-6 col-md-4 music_genre">
                                                <div class="team-member ">
                                                    <div class="team-img ">
                                                        <img class="img-responsive" src="../img/people/110/<?=$data['image'] ?>" alt="">
                                                    </div>                         <div class="team-info ">
                                                        <h4>


                                                            <a href="uni-student-profile.html">
                                                            <?= $data['nom'] ?></a>


                                                        </h4>

                                                        <span class='team-member-edit'><a href="uni-student-edit.php?id=<?= $data['id']?>"><i class='fa fa-pencil icon-xs'></i></a></span>
                                                        



                                                        <span class='material-icons' ><a class="material" href="../php/users/views/supprimerUtilisateur.php?id=<?= $data['id']?>">delete</a></span>

                                                        <span>First Year, Computer Engg.</span>
                                                        <br>
                                                        <span><small>Profession: </small><strong><?= $data['profession']  ?></strong> <small>ID STUDENT: </small><?= $data['id']  ?></span>
                                                        <br>
                                                        <span><small>NAME.:</small> <strong><?= $data['nom']  ?></strong></span>
                                                        <br>
                                                        <span><small>Students:</small> <strong>143</strong></span>
                                                    </div>

                                                    <p>
                                                </div>
                                            </div>


 <?php

}

               

 
}
 ?>               
