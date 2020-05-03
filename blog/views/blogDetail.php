<?PHP

include __DIR__."/../core/blogC.php";
$blog1C=new blogC();
$listeblog=$blog1C->recupererBlog($_GET['id']);
$listeavis=$blog1C->recupereravis($_GET['id']);




//var_dump($listeEmployes->fetchAll());




foreach($listeblog as $row){
    ?>

<!-- Blog Start -->
        <div class="blog-details-area pt-150 pb-140">

            <div class="container">
                <div class="row">
                    
                        <div class="col-md-8">
                        <div class="blog-details">
                                        <div class="row print_bloc">
                                            <div class="blog-details-img">
                                                <img src="img/blog/<?PHP echo $row['image']; ?>" style="max-width: 700px;height: auto;width:100%;margin:30px 0;" alt="blog-details">
                                            </div>
                                            <div class="blog-details-content">
                                                <h2><?PHP echo $row['titre']; ?> </h2>
                                                <h6>#<?PHP echo $row['hachtag']; ?> / <?PHP echo $row['categorie']; ?> /  <i class="fa fa-comments-o"></i> 4</h6>
                                                <p> <?PHP echo $row['article']; ?> </p>

                                                
                                            </div>
                                        </div>
                            

                                <!-- bloc print but -->
                                     <style type="text/css">
                                                    @media print{


                                                    body
                                                    {
                                                        visibility: hidden;
                                                    }
                                                    .print_bloc, .print_bloc{
                                                        visibility: visible; 
                                                    }
                                                    .print_bloc{
                                                        position: absolute;
                                                        left: 180px;
                                                        top: -400px;
                                                     }
                                                    }
                                                </style>
                                        <button class="default-btn" type="button"  onclick="fct_print()"><i class="fa fa-print"></i></button> 
                                        <script type="text/javascript">
                                           function  fct_print()
                                            {
                                                   window.print();
                                            }
                                         
                                        </script>
                                        
                                    <!-- bloc print but -->

                            <!-- bloc ajouter avis -->
                            <div class="reply-area">
                                <br>
                                <br>
                                <h3>Donner votre Avis :</h3>
                                <p>remplir le formulaire pour donner votre avis concernant l'article de <?PHP echo $row['titre']; ?>  </p>
                                <form id="contact-form" action="../formini/php/avis/views/ajouterAvis.php" method="GET">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>ID Article :</p>
                                            <input type="text" name="id_article" id="name" value=" <?PHP echo $row['id'];?>" readonly="yes">
                                            <p>Nom</p>
                                            <input type="text" name="nom" id="name">
                                             <p>Prénom</p>
                                            <input type="text" name="prenom" id="name">
                                        </div>
                                        <div class="col-md-12">
                                            <p>Email</p>
                                            <input type="text" name="email" id="email">
                                        </div>
                                        <div class="col-md-12">
                                            <p>Massage</p>
                                            <textarea name="message" id="msg" cols="15" rows="10"></textarea>
                                            <p>Note</p>
                                             <select style="width:150px; height: 35px" name="note">
                                            <option></option>
                                            <option value="very poor">Very Poor</option>
                                            <option value="bad">Bad</option>
                                            <option value="ok"> Ok</option>
                                            <option value="good">Good</option>
                                            <option value="excellent">Excellent</option>
                                        </select>
                                        </div>
                                       
                                        


                                    </div>
                                     <br><br>
                                    <button class="default-btn" type="submit" ><span>Envoyer</span> &nbsp; <i class="fa fa-reply"></i></button> 
                                    <p class="form-messege"></p>
                                </form>
                            </div>
                            <!-- fin bloc ajouter avis -->



                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-sidebar right">
                            <div class="single-blog-widget mb-47">
                                <h3>search</h3>
                                <div class="blog-search">

                                    <form id="search" method="GET" action="blog.php">
                                        <input type="search" placeholder="Search..." name="rech" />
                                        <button type="submit" name="recherche" >
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>

                                </div>
                            </div>
                            <div class="single-blog-widget mb-47">
                                <h3>categories</h3>
                                <ul>
                                    <li><a href="blog.php?rech=CSS">CSS </a></li>
                                    <li><a href="blog.php?rech=Technologie">Technologie</a></li>
                                    <li><a href="blog.php?rech=DATA SCIENCE">DATA SCIENCE</a></li>
                                    <li><a href="blog.php?rech=HTML">HTML5 </a></li>
                                    <li><a href="blog.php?rech=javascript">JavaScript </a></li>
                                    <li><a href="blog.php?rech=PHP">PHP </a></li>
                                    <li><a href="blog.php?rech=Design Graphique">Design Graphique</a></li>
                                </ul>
                            </div>
                            <div class="single-blog-widget mb-47">
                                <div class="single-blog-banner">
                                    <a href="blog.php" id="blog"><img src="img/blog/blog.png" alt="blog"></a>
                                    <h2>Meilleurs<br> blogs<br> disponibles</h2> 
                                </div>
                            </div>

                            <!-- bloc afficher les avis -->
                             <div class="single-blog-widget mb-47">
                                <h3>Avis sur l'article <a href="#" style="color: orange; font-size: 25px"><?php echo $row['titre']; ?>&nbsp;<img width="30px" src="img/blog/<?php echo $row['image'] ; ?>" ></a> :</h3>

                                            <?php 
                                            foreach ($listeavis as $row ) {
                                                ?>

                                                 
                                                        <div class="single-post mb-30">
                                                            <div class="single-post-content">
                                                                 
                                                                 <h4 >*Nom et Prénom :<label><?php echo $row['nom']; ?> <?php echo $row['prenom']; ?></label> </h4>
                                                                 <h5 >Email :<label><?php echo $row['email']; ?></label> </h5> 
                                                                 <h5 >Message : <label><?php echo $row['message']; ?></label> </h5> 
                                                                 <h5 >Note : <label><?php echo $row['note']; ?></label> </h5> 

                                                            </div>
                                                        </div>

                                           

                                            <?php
                                                }
                                                ?>
                             </div>
                             <!-- fin bloc afficher avis -->


                             

                 <!-- statistique debut -->

                            <div class="single-blog-widget mb-47">  
                                 <h3 align="center">Statistique sur <a href="#" style="color: orange; font-size: 20px">&nbsp;l'article :</a> </h3> 
                             </div>


                         <?php  
                             $connect = mysqli_connect("localhost", "root", "", "formini");  
                             $query = "SELECT id_article, note,COUNT(note) as nubre FROM avis WHERE id_article=96 GROUP by note";  
                             $result = mysqli_query($connect, $query);  
                             ?>  
                            
                                       
                                       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
                                       <script type="text/javascript">  
                                       google.charts.load('current', {'packages':['corechart']});  
                                       google.charts.setOnLoadCallback(drawChart);  
                                       function drawChart()  
                                       {  
                                            var data = google.visualization.arrayToDataTable([  
                                                      ['note', 'nubre'],  
                                                      <?php  
                                                      while($row = mysqli_fetch_array($result))  
                                                      {  
                                                           echo "['".$row["note"]."', ".$row["nubre"]."],";  
                                                      }  
                                                      ?>  
                                                 ]);  
                                            var options = {  
                                                
                                                  is3D:true,  
                                                  pieHole: 0.4  
                                                 };  
                                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                                            chart.draw(data, options);  
                                       }  
                                       </script>  
                                 
                                   <div class="single-blog-widget mb-47">
                                         <div id="piechart" style="width: 400px; height: auto;"></div>  
                                     </div>

               <!-- statistique fin -->



                            <div class="single-blog-widget" style="width: 400px;">
                                <h3>hachtags</h3>
                                <div class="single-tag">
                                   <a href="blog.php?rech=CSS" class="mr-10 mb-10">CSS </a>
                                   <a href="blog.php?rech=Technologie" class="mr-10 mb-10">Technologie</a>
                                   <a href="blog.php?rech=DATA SCIENCE" class="mr-10 mb-10">DATA SCIENCE</a>
                                   <a href="blog.php?rech=HTML" class="mr-10 mb-10">HTML5 </a></li>   
                                   <a href="blog.php?rech=javascript" class="mr-10">JavaScript </a>
                                   <a href="blog.php?rech=PHP" class="mr-10 mb-10">PHP </a>
                                   <a href="blog.php?rech=Design Graphique" class="mr-10">Design Graphique</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

                             
                          
                               
                           





  
        <!-- Blog End -->
<?PHP
}
?>