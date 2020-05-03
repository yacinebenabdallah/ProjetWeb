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
	                                     
                                            <img class="" style="max-width: 800px;height: auto;width:100%;margin:30px 0;" src="../img/blog/<?PHP echo $row['image']; ?>"alt="">
                                            <h3><a href="uni-blogs.php"><?= $row['titre'] ?></a></h3>
                                            <h5>Written by Youssef </h5>
                                             <h5>HACHTAG :  <a href="#"><?= $row['hachtag'] ?></a></h5>
                                             <h5><?= $row['categorie'] ?></h5> 
                                            <p class="blog_info">
                                                <i class="fa fa-comment"></i> <a href="#comments">3 comments</a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="fa fa-tags"></i> <a href="#">responsive</a> <a href="#">web</a> <a href="#">mobile</a>
                                            </p>
                                            
                                            <p class="blog-content"><?= $row['article'] ?></p>

                                            <a href="uni-blog-edit.php?id=<?=$row['id']?>" class="btn btn-primary"><span>Modifier</span>  &nbsp; <i class="fa fa-wrench"></i></a>

                                            <a href="http://localhost/Formini/php/blog/views/supprimerBlog.php?id=<?=$row['id']?>" class="btn btn-primary" style="background-color: red"><span>Supprimer</span>  &nbsp; <i class="fa fa-trash-o"></i></a>



                                     
                                      


                   
    <?PHP
}

}
}
else 
{
    
    foreach($listeblog as $row  )
    {

    ?>




 <img class="" style="max-width: 800px;height: auto;width:100%;margin:30px 0;" src="../img/blog/<?PHP echo $row['image']; ?>"alt="">
                                            <h3><a href="uni-blogs.php"><?= $row['titre'] ?></a></h3>
                                            <h5>Written by Youssef </h5>
                                             <h5>HACHTAG :  <a href="#"><?= $row['hachtag'] ?></a></h5>
                                             <h5><?= $row['categorie'] ?></h5> 
                                            <p class="blog_info">
                                                <i class="fa fa-comment"></i> <a href="#comments">3 comments</a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="fa fa-tags"></i> <a href="#">responsive</a> <a href="#">web</a> <a href="#">mobile</a>
                                            </p>
                                            
                                            <p class="blog-content"><?= $row['article'] ?></p>

                                            <a href="uni-blog-edit.php?id=<?=$row['id']?>" class="btn btn-primary"><span>Modifier</span>  &nbsp; <i class="fa fa-wrench"></i></a>

                                            <a href="http://localhost/Formini/php/blog/views/supprimerBlog.php?id=<?=$row['id']?>" class="btn btn-primary" style="background-color: red"><span>Supprimer</span>  &nbsp; <i class="fa fa-trash-o"></i></a>






<?php
}
}
?>