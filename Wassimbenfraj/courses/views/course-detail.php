

<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require_once __DIR__ . '/../core/courseManager.php' ;
//var_dump(__DIR__) ;
$manager =new CourseManager () ;

$reponse=$manager->get($_GET['id']) ;
$data=$reponse->fetch() ;
?>


<!-- <div class="courses-details-img">
<img src="img/course/courses-details.jpg" alt="courses-details">
</div> -->

<div class="course-details-content">
                                <h2><?=$data['name'] ?></h2>
                                <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
                                <div class="course-details-left">
                                    <div class="single-course-left">
                                        <h3>about course</h3>
                                        <p><?=$data['bio'] ?></p>
                                    </div>
                                    <div class="single-course-left">
                                        <h3>how to apply</h3>
                                        <p>I must explain to you how all this a mistaken idea of ncing great explorer of the rut the is lder of human happinescias unde omnis iste natus error sit volptatem accuntium mque laudantium perspiciatis unde omnis iste natuss</p>
                                    </div>
                                    <div class="single-course-left">
                                        <h3>certification</h3>
                                        <p class="margin">I must explain to you how all this a mistaken idea of ncing great explorer of the rut the is lder of human happinescias unde omnis iste natus error sit volptatem accuntium mque laudantium perspiciatis unde omnis iste natuss</p>
                                        <p>I must explain to you how all this a mistaken idea of ncing great explorer of the rut the is lder of human</p>
                                    </div>
                                </div>

                    </div> 
