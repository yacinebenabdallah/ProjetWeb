<?PHP
include __DIR__."/../core/blogC.php";
$blog1C=new blogC();
$listeblog=$blog1C->afficherBlogs();

//var_dump($listeEmployes->fetchAll());



if (isset($_GET['rech']))
{




foreach($listeblog as $row  )
{
		if (($_GET['rech']==$row['categorie'] )||($_GET['rech']==$row['titre'] )||($_GET['rech']==$row['hachtag'] ))
		{

			
		

	?>
	
	        <div class="col-md-4 col-sm-6 col-xs-20">
                        <div class="single-blog mb-60">
                            <div class="blog-img">
                                <a href="blog-details.php?id=<?=$row['id'] ?>"><img src="img/blog/<?PHP echo $row['image']; ?>" alt="blog"></a>
                                <div class="blog-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>

                            
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p> # <?=$row['hachtag'] ?> /  <?= $row['categorie'] ?> /  <i class="fa fa-comments-o"></i> 4</p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="blog-details.php?id=<?=$row['id'] ?>"><?=$row['titre'] ?> </a></h2>
                                    <a href="blog-details.php?id=<?=$row['id'] ?>">read more</a>
                                </div>
                            </div>
                        </div>
         </div>

                   
	<?PHP
}

}
}
else 
{
    
	foreach($listeblog as $row  )
    {

	?>


   
	
	        <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog mb-60">
                            <div class="blog-img">
                                <a href="blog-details.php?id=<?=$row['id'] ?>"><img src="img/blog/<?PHP echo $row['image']; ?>" alt="blog"></a>
                                <div class="blog-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>

                            
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p> #<?=$row['hachtag'] ?> /  <?= $row['categorie'] ?> /  <i class="fa fa-comments-o"></i> 4</p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="blog-details.php?id=<?=$row['id'] ?>"><?=$row['titre'] ?> </a></h2>
                                    <a href="blog-details.php?id=<?=$row['id'] ?>">read more</a>
                                </div>
                            </div>
                     </div>
             </div>
<?php
}
}
?>





