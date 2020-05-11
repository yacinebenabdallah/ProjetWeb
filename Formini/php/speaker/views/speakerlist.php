<?php 

require __DIR__ . '/../core/speakerManager.php' ;

$manager =new speakerManager () ;

$reponse=$manager->afficherSpeakers() ;




foreach($reponse as $row)
{
?>
           <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-event mb-60">
                            <div class="event-img">
                                <a>
                                    <img src="../img/event/<?php echo $row['img1']; ?>" alt="event">
                                    <div class="course-hover">
                                    
                                    </div>
                                </a>
                                <div class="event-date">
                                    <h3>Who am I</h3>  
                                </div>
                            </div>
                            <div class="event-content text-left">

                                <ul>
                                    <li><span>ID : </span><?php echo $row['id']; ?></li> 
                                    <li><span>Name : </span><?php echo $row['name']; ?></li>
                                    <li><span>Surname : </span><?php echo $row['surname']; ?></li>
                                    <li><span>Age : </span><?php echo $row['age'] ; ?></li>
                                    <li><span>Specialty: </span><?php echo $row['specialty'] ; ?></li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="uni-speaker-edit.php?id=<?=$row['id']?>"><button type="btn btn-primary" class="btn">Edit</button></a>
                                    <a class="default-btn" href="../php/speaker/core/delete_speaker.php?id=<?=$row['id']?>"><button type="button" class="btn">Delete</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
 <?php
}
 ?>               
