<?php 

require __DIR__ . '/../core/eventManager.php' ;

$manager =new eventManager () ;

$reponse=$manager->afficherEvents();

$countdown=array() ;

if (isset($_GET['recherche']))
{
while($data=$reponse->fetch())
{
    if (($_GET['recherche']==$data['categories']) || ($_GET['recherche']==$data['tags']) )
    {
        array_push($countdown,strtotime($data['date'])) ;  
	   ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-event mb-60">
                            <div class="event-img">
                                <a href="event-details.php?id=<?=$data['id']?>">
                                    <img src="img/event/<?=$data['img'] ?>" alt="event">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>

                                <div class="demo_container">
                                <div class="demo"></div>
                                </div>
                                
                            </div>

                            <div class="event-content text-left">
                                <h4><a href="event-details.php"><?=$data['titre'] ?></a></h4>
                                <ul>
                                    <li><span>Duration: </span><?=$data['duree']?> hours</li>
                                    <li><span>Location: </span><?=$data['emplacement']?></li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="event-details.php?id=<?=$data['id'] ?>">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

<?php 
}
}
}

else 
{
    while($data=$reponse->fetch())
{
    array_push($countdown,strtotime($data['date'])) ;  
    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-event mb-60">
                            <div class="event-img">
                                <a href="event-details.php?id=<?=$data['id']?>">
                                    <img src="img/event/<?=$data['img'] ?>" alt="event">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>

                                <div class="demo_container">
                                <div class="demo"></div>
                                </div>
                                
                            </div>

                            <div class="event-content text-left">
                                <h4><a href="event-details.php"><?=$data['titre'] ?></a></h4>
                                <ul>
                                    <li><span>Duration: </span><?=$data['duree']?> hours</li>
                                    <li><span>Location: </span><?=$data['emplacement']?></li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="event-details.php?id=<?=$data['id'] ?>">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

<?php 
}
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