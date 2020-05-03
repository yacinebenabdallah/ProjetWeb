<?php
include "../entities//blog.php";
include "../core/blogC.php";

if (isset($_GET['titre']) and isset($_GET['article']) and isset($_GET['img']) and isset($_GET['hachtag']) and isset($_GET['categorie']) ){
    $blog1=new blog($_GET['titre'],$_GET['article'],$_GET['img'],$_GET['hachtag'],$_GET['categorie']);
    
    $blog1C=new blogC();
    $blog1C->ajouterBlog($blog1);
    header("Location: http://localhost/Formini/backend/uni-blogs.php");
    
        
    }else{
        echo "vérifier les champs";
    }




//<!--bloc notification par mail --->
$listeuti=$blog1C->rechercheutilisateur();

foreach($listeuti as $row  )
			{
				
					

						
					$to =  $row['mail']; 
					$email_sub = "Vous avez été contacté par : ForminiTN ".
								 " Objet : Nouvel Article";
					$email_body = "Nouveau Mail :Espace Blogs <br/><br>".
								  "Nouvel article est déja sur notre plateforme :<br><br> ".
							      "Dépêchez vous , lisez l'article et veuillez donner votre avis<br> <br>";
					$headers="From:<$to>\n";
					$headers.="Content-Type:text/html; charset=UTF-8";
					if($to != "") 
							{
									mail($to,$email_sub,$email_body,$headers);
									header("Location: http://localhost/Formini/backend/uni-blogs.php");
						
							}
			}
//<!--bloc notification par mail --->


?>



