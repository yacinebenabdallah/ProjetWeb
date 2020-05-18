<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require __DIR__ . '/../core/review/reviewManager.php' ;
//var_dump(__DIR__) ;
$manager =new ReviewManager () ;

$reponse=$manager->get($_GET['id']) ;
$reponse2=$manager->calculate($_GET['id']) ;
$data=$reponse2->fetch();
if($data['total']){
$average=(5*$data['5star']+4*$data['4star']+3*$data['3star']+2*$data['2star']+$data['1star']) /$data['total'];
$average=number_format($average, 1, '.', '');

$per5=$data['5star']/$data['total'] *100 ;
$per5=number_format($per5, 0, '.', '');

$per4=$data['4star']/$data['total'] *100 ;
$per4=number_format($per4, 0, '.', '');

$per3=$data['3star']/$data['total'] *100 ;
$per3=number_format($per3, 0, '.', '');

$per2=$data['2star']/$data['total'] *100 ;
$per2=number_format($per2, 0, '.', '');

$per1=$data['1star']/$data['total'] *100 ;
$per1=number_format($per1, 0, '.', '');
}
else{
    $average=number_format(0, 1, '.', '');
    $per5=0 ;
    $per4=0 ;
    $per3=0 ;
    $per2=0 ;
    $per1=0 ;
}
if($average<=0)
{
    $all_star=0 ;
    $all_nostar=5 ;
}
else if($average>0 && $average <2) {
    $all_star=1 ;
    $all_nostar=4 ; 
}
else if($average>=2 && $average <3) {
    $all_star=2 ;
    $all_nostar=3 ; 
}
else if($average>=3 && $average <4) {
    $all_star=3 ;
    $all_nostar=2 ; 
}
else if($average>=4 && $average <5) {
    $all_star=4;
    $all_nostar=1 ; 
}
else if($average>= 5) {
    $average=5 ;
    $all_star=5 ;
    $all_nostar=0 ; 
}

?>


<div class="bg-white">
    <div class="pt-32pt">
        <div class="containerpage__container">
            <h4 class="sfeedback">Student Feedback</h4>
            <div class="rowfeedback">
                <div class="col-md-44">
                    <div class="display-1"><?=$average?></div>
                    <div class="ratingrating-32">
                    <?php 
                                      for($i=0 ;$i<$all_star ;$i++)
                                      {
                                       echo '<span class="rating__item"><span class="material-icons"id="ficon">star</span></span>' ;
                                      }
                                      for($i=0 ;$i<$all_nostar ;$i++)
                                      {
                                       echo '<span class="rating__item"><span class="material-icons"id="ficon">star_border</span></span>' ;
                                      }
                                      ?>
<!--                         <span class="rating__item"><span class="material-icons" id="ficon">star</span></span>
                        <span class="rating__item"><span class="material-icons" id="ficon">star</span></span>
                        <span class="rating__item"><span class="material-icons" id="ficon">star</span></span>
                        <span class="rating__item"><span class="material-icons" id="ficon">star</span></span>
                        <span class="rating__item"><span class="material-icons" id="ficon">star_border</span></span> -->
                    </div>
                    <p class="text-mutedmb-0"><?=$data ['total']?> ratings</p>
                </div>
                <div class="col-md-9">

                    <div class="rowalign-items-center">
                        <div class="col-md-9col-sm-6">
                            <div class="progress">
                                <div class="progress-barbg-secondary" role="progressbar" aria-valuenow="75"
                                    style="width: <?=$per5 ?>%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-3col-sm-6">
                            <div class="ratingrating-24">
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                            </div>
                            <span class="text-muted"><?=$per5 ?>%</span>
                            <span class="material-iconsicon-16pt">close</span>
                        </div>
                    </div>
                    <div class="rowalign-items-center">
                        <div class="col-md-9col-sm-6">
                            <div class="progress">
                                <div class="progress-barbg-secondary" role="progressbar" aria-valuenow="75"
                                    style="width: <?=$per4 ?>%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-3col-sm-6">
                            <div class="ratingrating-24">
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons"
                                        id="ficon2">star_border</span></span>
                            </div>
                            <span class="text-muted"><?=$per4 ?>%</span>

                        </div>
                    </div>
                    <div class="rowalign-items-center">
                        <div class="col-md-9col-sm-6">
                            <div class="progress">
                                <div class="progress-barbg-secondary" role="progressbar" aria-valuenow="75"
                                    style="width: <?=$per3 ?>%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-3col-sm-6">
                            <div class="ratingrating-24">
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons"
                                        id="ficon2">star_border</span></span>
                                <span class="rating__item"><span class="material-icons"
                                        id="ficon2">star_border</span></span>
                            </div>
                            <span class="text-muted"><?=$per3 ?>%</span>

                        </div>
                    </div>
                    <div class="rowalign-items-center">
                        <div class="col-md-9col-sm-6">
                            <div class="progress">
                                <div class="progress-barbg-secondary" role="progressbar" aria-valuenow="75"
                                    style="width: <?=$per2 ?>%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-3col-sm-6">
                            <div class="ratingrating-24">
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons"
                                        id="ficon2">star_border</span></span>
                                <span class="rating__item"><span class="material-icons"
                                        id="ficon2">star_border</span></span>
                                <span class="rating__item"><span class="material-icons"
                                        id="ficon2">star_border</span></span>
                            </div>
                            <span class="text-muted"><?=$per2 ?>%</span>

                        </div>
                    </div>
                    <div class="rowalign-items-center">
                        <div class="col-md-9col-sm-6">
                            <div class="progress">
                                <div class="progress-barbg-secondary" role="progressbar" aria-valuenow="75"
                                    style="width: <?=$per1 ?>%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-3col-sm-6">
                            <div class="ratingrating-24">
                                <span class="rating__item"><span class="material-icons" id="ficon2">star</span></span>
                                <span class="rating__item"><span class="material-icons"
                                        id="ficon2">star_border</span></span>
                                <span class="rating__item"><span class="material-icons"
                                        id="ficon2">star_border</span></span>
                                <span class="rating__item"><span class="material-icons"
                                        id="ficon2">star_border</span></span>
                                <span class="rating__item"><span class="material-icons"
                                        id="ficon2">star_border</span></span>
                            </div>
                            <span class="text-muted"><?=$per1 ?>%</span>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="pt-16pt">
        <div id="affichereview2" class="page-separator-mask">
            <div class="containerpage__container">
                <?php  
                    while($data=$reponse->fetch())
                    {
                      $rating= (int)$data['rating'] ;
                      $star=$rating ;
                      $no_star=5-$rating ;
                     
                    ?>
                
                <div class="mb-16ptpb-16pt">
                    <div class="col-md-3mb-16pt">
                        <div class="d-flex">
                            <a href="student-profile.html" class="avataravatar-sm">
                                <img src="img/people/110/guy-1.jpg" alt="avatar" class="avatar-imgrounded-circle">
                            </a>
                            <div class="flex">
                                <p class="text-mutedm-0"><?=$data['date'] ?> </p>
                                <p class="mb-0"><a href="student-profile.html"
                                        class="text-body2"><?=$data['name'] ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="ratingmb-8pt">
                            <?php 
                                      for($i=0 ;$i<$star ;$i++)
                                      {
                                       echo '<span class="rating__item"><span class="material-icons"id="ficon3">star</span></span>' ;
                                      }
                                      for($i=0 ;$i<$no_star ;$i++)
                                      {
                                       echo '<span class="rating__item"><span class="material-icons"id="ficon3">star_border</span></span>' ;
                                      }
                                      ?>

                        </div>
                        <p class="text-70mb-0"><?=$data['bio']?></p>
                    </div>
                </div>
                <?php
               }
                ?>
            </div>

            <div  id="affichereview" class="page-separator-mask__content">
                <div class="page-separator-mask__top"></div>
                <div class="page-separator-mask__bottombg-body"></div>
                <div class="page-separator">
                    <button id="clickme" class="page-separator__textlink-text">read more <i
                            class="material-icons">keyboard_arrow_down</i></button>
                </div>
            </div>
        </div>
    </div>
</div>