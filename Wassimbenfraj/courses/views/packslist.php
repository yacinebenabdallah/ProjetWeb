<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require __DIR__ . '/../core/packManager.php' ;
//var_dump(__DIR__) ;
$manager =new packManager () ;

$reponse=$manager->afficher() ;



$countdown=array() ;
while($data=$reponse->fetch())
{
    array_push($countdown,strtotime($data['end_date'])) ;  
    $discount_price= $data['price']- ($data['price']*0.2) ;
?>
     
     
     
     
     
                <div class="col-md-4 col-sm-6 col-xs-12" style="height:549px;" >
                    <div class="single-course mb-70">
                        <div class="course-img">
                            <a href="course-details.php"><img src="img/course/<?=$data['img'] ?>" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                            <div class="demo_container">
                            <div class="demo"></div>
                           </div>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.php"><?= $data['name'] ?></a></h3>
                            <p><?= $data['bio']?></p>
                            <span class="price"> $<?= (int) $discount_price?></span> <span class="price2"> $<?= (int)$data['price']?> </span>
                            <a class="default-btn" href="course-details.php">read more</a>
                            


                            </div>
                    </div>
                </div>
 <?php
}
 ?>               
 <script>
 
  if (typeof countDownDate === 'undefined') {
 var countDownDate=[];

 var now = <?php echo time() ?> * 1000;

 var temp= <?php echo json_encode($countdown); ?>;
 temp.forEach(fill)
 
 function fill(item,index) {
    countDownDate.push(item*1000) ;
 }
 }

 console.log(countDownDate) ;
 </script>
<script src="js/countdown.js"></script>