<?php 

require __DIR__ . '/../core/eventManager.php' ;

//var_dump(__DIR__) ;

$manager =new eventManager () ;

$reponse=$manager->recupererEvent($_GET['id']) ;

$data=$reponse->fetch() ;
?>

<div class="row">
<div class="event-details-img">
                                <img src="img/event/<?=$data['img'] ?>" alt="event-details">
                                <div class="event-date">
                                    <h3>20 <span>jun</span></h3>  
                                </div>
                            </div>
                            <div class="event-details-content">
                                <h2> <?=$data['titre'] ?></h2>
                                <ul>
                                    <li><span>Date : </span><?=$data['date'] ?></li>
                                    <li><span>venue : </span><?=$data['emplacement'] ?></li>
                                    <li><span>Nombre de places disponibles : </span><?=$data['NbPlace'] ?></li>
                                </ul>
                                <p> <?=$data['descrip'] ?></p>

                                <div class="speakers-area fix">
                                    <h4>speakers</h4>
                                    <div class="single-speaker">
                                        <div class="speaker-img">
                                            <img src="img/event/<?=$data['img1'] ?>" alt="speaker">
                                        </div>
                                        <div class="speaker-name">
                                            <h5><?=$data['name'] ?> <?=$data['surname'] ?></h5>
                                            <p><?=$data['specialty'] ?></p>
                                        </div>
                                    </div>
                                    <div class="single-speaker">
                                        <div class="speaker-img">
                                            <img src="img/event/<?=$data['img1'] ?>" alt="speaker">
                                        </div>
                                        <div class="speaker-name">
                                            <h5><?=$data['speaker2'] ?></h5>
                                            <p>Developer, STD </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
</div>