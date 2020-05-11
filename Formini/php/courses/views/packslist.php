<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require __DIR__ . '/../core/packManager.php' ;
//var_dump(__DIR__) ;
$manager =new packManager () ;

$reponse=$manager->afficher() ;




while($data=$reponse->fetch())
{
?>
     
     
     
     
     
                <div class="col-md-4 col-sm-6 col-xs-12" style="height:549px;" >
                    <div class="single-course mb-70">
                        <div class="course-img">
                            <a href="course-details.php"><img src="img/course/course<?=$data['img'] ?>.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.php"><?= $data['name'] ?></a></h3>
                            <p><?= $data['bio']?></p>
                            <a class="default-btn" href="course-details.php">read more</a>
                        </div>
                    </div>
                </div>
 <?php
}
 ?>               