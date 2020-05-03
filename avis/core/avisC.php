<?php
include __DIR__."/../config2.php";

class avisC{
    function afficheravis($avis)
    {
        echo "Id:" .$avis->getId()."<br>";
        echo "nom:".$avis->getnom()."<br>";
        echo "prenom".$avis->getprenom()."<br>";  
        echo "email:" .$avis->getemail()."<br>";
        echo "message:".$avis->getmessage()."<br>";
         echo "note:".$avis->getnote()."<br>";
         echo "id_article:".$avis->getid_article()."<br>";
         
    }

    function ajouteravis($avis)
    {
        $sql="insert into avis (id,nom,prenom,email,message,note,id_article)
        values (:id,:nom,:prenom,:email,:message,:note,:id_article)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $id=$avis->getId();
            $nom=$avis->getnom();
            $prenom=$avis->getprenom();
             $email=$avis->getemail();
            $message=$avis->getmessage();
              $note=$avis->getnote();
              $id_article=$avis->getid_article();
          
          
            $req->bindValue(':id',$id);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':email',$email);
            $req->bindValue(':message',$message);
            $req->bindValue(':note',$note);
            $req->bindValue(':id_article',$id_article);
           
           
            
                $req->execute();
               
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
            

    }
    function afficheraviss(){ ////affichage trier 
		//$sql="SElECT * From avis e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From avis order by id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    function supprimeravis($id){
		$sql="DELETE FROM avis where id=:id";
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
    
    function modifieravis($avis,$id){
		$sql="UPDATE avis SET nom=:nom,prenom=:prenom,email=:email,message=:message,note=:note ,id_article=:id_article WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	   
        $nom=$avis->getnom();
        $prenom=$avis->getprenom();
          $email=$avis->getemail();
            $message=$avis->getmessage();
            $note=$avis->getnote();
           
        
		$datas = array(':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email, ':message'=>$message ,':note'=>$note,':id_article'=>$id_article );
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
            $req->bindValue(':message',$message);
            $req->bindValue(':note',$note);
        
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    function recupereravis(){
		$sql="SELECT * from avis a inner join blog b on a.id_article = b.id ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercheavis($obj){
      $sql="SELECT * From avis where avis.email= '$obj'  ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
    }
}


?>