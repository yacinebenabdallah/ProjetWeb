<?php
include __DIR__."/../config2.php";

class blogC{
    function afficherBlog($blog)
    {
        echo "Id:" .$blog->getId()."<br>";
        echo "Titre:".$blog->getTitre()."<br>";
        echo "Article".$blog->getArticle()."<br>";  
        echo "Image:" .$blog->getImage()."<br>";
        echo "Hachtag:".$blog->getHachtag()."<br>";
        echo "Categorie".$blog->getCategorie()."<br>";     
    }

    function ajouterBlog($blog)
    {
        $sql="insert into blog (id,titre,article,image,hachtag,categorie)
        values (:id,:titre,:article,:image,:hachtag,:categorie)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $id=$blog->getId();
            $titre=$blog->getTitre();
            $article=$blog->getArticle();
             $image=$blog->getImage();
            $hachtag=$blog->getHachtag();
            $categorie=$blog->getCategorie();
          
            $req->bindValue(':id',$id);
            $req->bindValue(':titre',$titre);
            $req->bindValue(':article',$article);
            $req->bindValue(':image',$image);
            $req->bindValue(':hachtag',$hachtag);
            $req->bindValue(':categorie',$categorie);
           
            
                $req->execute();
               
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
            

    }
    function afficherBlogs(){ ////affichage trier 
		//$sql="SElECT * From blog e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From blog order by id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    function supprimerBlog($id){
		$sql="DELETE FROM blog where id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function modifierBlog($blog,$id){
		$sql="UPDATE blog SET titre=:titre,article=:article,image=:image,hachtag=:hachtag,categorie=:categorie WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	   
        $titre=$blog->getTitre();
        $article=$blog->getArticle();
          $image=$blog->getImage();
            $hachtag=$blog->getHachtag();
            $categorie=$blog->getCategorie();
        
		$datas = array(':id'=>$id, ':titre'=>$titre,':article'=>$article,':image'=>$image, ':hachtag'=>$hachtag,':categorie'=>$categorie);
		$req->bindValue(':id',$id);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':article',$article);
        $req->bindValue(':image',$image);
            $req->bindValue(':hachtag',$hachtag);
            $req->bindValue(':categorie',$categorie);
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    function recupererBlog($id){
		$sql="SELECT * from blog where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function recupereravis($id){
        $sql="SELECT * from blog b inner join avis a on b.id = a.id_article where b.id =$id ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercheBlog($cat){
      $sql="SELECT * From blog where blog.categorie= '$cat'  ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
    }

//fction hedhy just test lil mailing kahw

    function rechercheutilisateur(){ 
        $sql="SELECT mail From utilisateur ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    //////fin fct test
}


?>