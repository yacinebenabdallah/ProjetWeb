<?php 

require __DIR__ . '/../core/eventManager.php' ;

$manager =new eventManager () ;

$reponse=$manager->afficherEvents() ;




foreach($reponse as $row)
{
?>
           <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-event mb-60">
                            <div class="event-img">
                                <a href="event-details.html">
                                    <img src="../img/event/<?php echo $row['img'] ; ?>" alt="event">
                                    <div class="course-hover">
                                        
                                    </div>
                                </a>
                                <div class="event-date">
                                    <h3>Details</h3>  
                                </div>
                            </div>
                            <div class="event-content text-left">
                                <h4><a href="event-details.php"><?php echo $row['titre']; ?></a></h4>

                                <ul>
                                    <li><span>ID : </span><?php echo $row['id']; ?></li>
                                    <li><span>Date : </span><?php echo $row['date'] ; ?></li>
                                    <li><span>Duration: </span><?php echo $row['duree'] ; ?> hour(s)</li>
                                    <li><span>Location: </span><?php echo $row['emplacement'] ; ?></li>
                                    <li><span>Nombre de places disponibles: </span><?php echo $row['NbPlace']; ?> </li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="uni-event-edit.php?id=<?=$row['id']?>"><button type="btn btn-primary" class="btn" name="modifier">Edit</button></a>
                                    <a class="default-btn" href="../php/event/core/delete_event.php?id=<?=$row['id']?>"><button type="button" class="btn">Delete</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
 <?php
}
 ?>               
