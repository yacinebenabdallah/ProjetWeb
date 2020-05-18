<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require_once __DIR__ . '/../core/courseManager.php' ;
//var_dump(__DIR__) ;
$manager =new CourseManager () ;

$reponse=$manager->afficher() ;




while($data=$reponse->fetch())
{
?>
     
     
     
     
     
                <div  class="col-md-4 col-sm-6 col-xs-12" style="height:549px;transition:4s" >
                    <div class="single-course mb-70" >

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

                                <a href="
                                <?php
                                if(isset($_SESSION['id']))
                                {
                                 echo 'http://localhost/Formini/php/panier/views/ajoutpanier.php?id='.$_SESSION['id'].'&id_formation='.$data['id'] ;
                                }
                                else 
                                {
                                    echo 'login.php';
                                }
                                ?>
                                ">
                                <span class="fa fa-heart-o" onclick="
                                if(this.className=='fa fa-heart-o')
                                {
                                    
                                this.className='fa fa-heart' ;
                                this.id='cartselect2';
                                }
                                else{
                                    this.className='fa fa-heart-o' ;
                                    this.id='cartselect';
                                    }
                                "
                                 id="cartselect" ></span>
                                </a>
                        </div>
                        <div class="course-content">
                        <div class="teachername">
                         <span class="by">by</span>  <?=$data['instructor_name'] ?>
                        </div>
                            <h3 ><a  href="course-details.php?id=<?=$data['id'] ?>"><?= $data['name'] ?></a></h3>
                            <p><?= $data['bio']?></p>
                            <span class="price"> $<?= $data['price']?> </span>
                            <a class="default-btn" href="course-details.php?id=<?=$data['id'] ?>">read more</a>
                        </div>
                    </div>
                </div>
                <div  class="col-md-444"  style=" display:none;" >
                    <div class="single-course mb-70" style="display: flex; margin-bottom: 20px; margin-left: 300px;">

                        <div class="course-img">

                            <a href="course-details.php?id=<?=$data['id'] ?>"><img src="img/course/<?=$data['img'] ?>" alt="course">
                                <div class="course-hover">

                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                           
                                <?php 
                                if($data['type']==1)
                                {
                                    echo '<i id="type1" class="type">Online</i>' ;
                                }
                                else
                                echo ' <i id="type2" class="type2">Workshop</i>' ;
                                ?>

<a href="
<?php
                                if(isset($_SESSION['id']))
                                {
                                 echo 'http://localhost/Formini/php/panier/views/ajoutpanier.php?id='.$_SESSION['id'].'&id_formation='.$data['id'] ;
                                }
                                else 
                                {
                                    echo 'login.php';
                                }
                                ?>
">
                                <span class="fa fa-heart-o" onclick="
                                if(this.className=='fa fa-heart-o')
                                {
                                    
                                this.className='fa fa-heart' ;
                                this.id='cartselect2';
                                }
                                else{
                                    this.className='fa fa-heart-o' ;
                                    this.id='cartselect';
                                    }
                                "
                                 id="cartselect"  style="left: 292px; bottom: 181px;" ></span>
                                </a>
                        </div>
                       
                        <div class="course-content" style="width: 68%;">
                        <div class="teachername">
                         <span class="by">by</span>  <?=$data['instructor_name'] ?>
                        </div>
                            <h3 ><a  href="course-details.php?id=<?=$data['id'] ?>"><?= $data['name'] ?></a></h3>
                            <h3 hidden><?= $data['category'] ?></h3>
                            <p><?= $data['bio']?></p>
                            <span class="price" style="left: 77%;"> $<?= $data['price']?> </span>
                            <a class="default-btn" href="course-details.php?id=<?=$data['id'] ?>">read more</a>
                        </div>
                    </div>
                </div>
 <?php
}
 ?>               