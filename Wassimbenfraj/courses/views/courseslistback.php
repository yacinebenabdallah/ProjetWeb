<?php 

require __DIR__ . '/../core/courseManager.php' ;

$manager =new CourseManager () ;

$reponse=$manager->afficher() ;




while($data=$reponse->fetch())
{
?>
     
     
     
     
     
     <div class="col-lg-3 col-sm-6 col-md-4 music_genre">
                                                <div class="team-member ">
                                                    <div class="team-img ">
                                                        <img class="img-responsive" src="../img/course/<?=$data['img'] ?>" alt="">
                                                    </div>                         <div class="team-info ">
                                                        <h4>


                                                            <a href="uni-course-profile.html">
                                                            <?= $data['name'] ?></a>


                                                        </h4>

                                                        <span class='team-member-edit'><a href="uni-course-edit.php?id=<?= $data['id']?>"><i class='fa fa-pencil icon-xs'></i></a></span>
                                                        <span class='material-icons' ><a class="material" href="../php/courses/core/delete_course.php?id=<?= $data['id']?>">delete</a></span>

                                                        <span>First Year, Computer Engg.</span>
                                                        <br>
                                                        <span><small>Price: </small><strong><?= $data['price']  ?></strong> <small>Time: </small><?= $data['price']  ?></span>
                                                        <br>
                                                        <span><small>Prof.:</small> <strong><?= $data['instructor_name']  ?></strong></span>
                                                        <br>
                                                        <span><small>Students:</small> <strong>143</strong></span>
                                                    </div>

                                                    <p>
                                                </div>
                                            </div>
 <?php
}
 ?>               
