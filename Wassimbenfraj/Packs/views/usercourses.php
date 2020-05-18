
<?php 



/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require_once __DIR__ . '/../core/courseManager.php' ;
//var_dump(__DIR__) ;
$manager =new CourseManager () ;

$reponse=$manager->get_usercourses($_SESSION['id']);





?>










                      <div id="usericon" class='pull-right' >
                    <ul class="info-menu right-links list-inline list-unstyled">
                        <li style="height:0px;width:200px;" class="profile">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <img src="backend/data/profile/user.png" alt="user-image" class="img-circle img-inline" style="height:50px;width:50px;" >
                                <span style="font-size:14px;"><?=$_SESSION['lastname'].' '.$_SESSION['firstname']?> <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu profile animated fadeIn">

                                <?php 
                                
                                while($data=$reponse->fetch())
                                {
                                ?>
                                  <li>
                                    <a href="course.php?id=<?=$data['id']?>"><?=$data['name']?></a>
                                  </li>
                                <?php
                                  }
                                  ?> 
                                  <li class="last">
                                    <a href="php/courses/core/logout.php">
                                        <i class="fa fa-lock"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>			
                </div>


              