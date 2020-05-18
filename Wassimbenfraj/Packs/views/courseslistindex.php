<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require __DIR__ . '/../core/courseManager.php' ;
//var_dump(__DIR__) ;
$manager =new CourseManager () ;

$reponse=$manager->afficher() ;


$i=0;

while($data=$reponse->fetch() )
{
  $i++ ;
  if($i<4)
  {
?>
     
     
     
     
     
                <div class="col-md-4 col-sm-6 col-xs-12" >
                    <div class="single-course mb-70">

                        <div class="course-img">

                            <a href="course-details.php?id=<?=$data['id'] ?>"><img src="img/course/<?=$data['img'] ?>" alt="course">
                                <div class="course-hover">

                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                           
                                <?php 
                                if($data['type']==1)
                                {
                                    echo '<div class="type">  Online </div>' ;
                                }
                                else
                                echo ' <div class="type2"> Workshop </div>' ;
                                ?>

                        </div>
                        <div class="course-content">
                        <div class="teachername">
                         <span class="by">by</span>  <?=$data['instructor_name'] ?>
                        </div>
                            <h3><a href="course-details.php?id=<?=$data['id'] ?>"><?= $data['name'] ?></a></h3>
                            <p><?= $data['bio']?></p>
                            <span class="price"> $<?= $data['price']?> </span>
                            <a class="default-btn" href="course-details.php?id=<?=$data['id'] ?>">read more</a>
                        </div>
                    </div>
                </div>
 <?php
  }
}
 ?>               