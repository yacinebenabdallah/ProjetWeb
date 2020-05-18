<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require __DIR__ . '/../core/feedback/feedbackManager.php' ;
//var_dump(__DIR__) ;
$manager =new FeedbackManager () ;

$reponse=$manager->afficher() ;




while($data=$reponse->fetch())
{
?>
     
     
     
     
                               <div class="col-12">
                                    <div class="card">
                                        <blockquote class="mb-0">
                                            <p class="text-70"><?= $data['message'] ?></p>

                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="img/people/110/guy-2.jpg" width="40" alt="avatar" class="rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><a href="" class="text-body"><strong><?= $data['name'] ?></strong></a></p>
                                                    <div class="rating">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
 <?php
}
 ?>               