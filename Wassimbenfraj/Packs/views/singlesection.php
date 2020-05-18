<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
//require __DIR__ . '/../core/courseManager.php' ;
//var_dump(__DIR__) ;


$reponse4=$manager->get_section($_GET['ids']) ;



$data4=$reponse4->fetch();



?>
     
                                <li class="accordion__item open">
                                    <a class="accordion__toggle" data-toggle="collapse" data-parent="#course-toc" href="#course-toc-1">
                                        <span class="flex"><?=$data4['section_name'] ?></span>
                                        <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                    </a>
                                    <div class="accordion__menu">
                                        <ul class="list-unstyled collapse show" id="course-toc-1">
                                        <?php 

                                          $reponse5=$manager->afficher_lecture($data4['id']) ;
                                          

                                        while($data5=$reponse5->fetch())
                                        {
                                            
                                        ?>
                                            <li class="accordion__menu-link active">
                                                <span class="material-icons icon-16pt icon--left text-primary">play_circle_outline</span>
                                                <a class="flex" href="lesson.php?idc=<?=$data4['id_course']?>&ids=<?=$data4['id']?>&id=<?=$data5['id']?>"><?=$data5['name'] ?></a>
                                                <span class="text-muted"><?=$data5['length'] ?></span>
                                            </li>
                                            <?php
                                          }
                                            ?> 
                                        </ul>
                                    </div>
                                </li> 
     
     

