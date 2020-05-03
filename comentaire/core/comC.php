<?php
include __DIR__."/../config2.php";

class comC{
    function affichercom($com)
    {
        echo "Id:" .$com->getId()."<br>";
        echo "nom:".$com->getnom()."<br>";
        echo "prenom".$com->getprenom()."<br>";  
        echo "objet:" .$com->getobjet()."<br>";
        echo "comentaire:".$com->getcomentaire()."<br>";
         
    }

    function ajoutercom($com)
    {
        $sql="insert into com (id,nom,prenom,objet,comentaire)
        values (:id,:nom,:prenom,:objet,:comentaire)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $id=$com->getId();
            $nom=$com->getnom();
            $prenom=$com->getprenom();
             $objet=$com->getobjet();
            $comentaire=$com->getcomentaire();
          
          
            $req->bindValue(':id',$id);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':objet',$objet);
            $req->bindValue(':comentaire',$comentaire);
           
           
            
                $req->execute();
               
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
            

    }
    function affichercoms(){ ////affichage trier 
		//$sql="SElECT * From com e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From com order by id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    function supprimercom($id){
		$sql="DELETE FROM com where id=:id";
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
    
    function modifiercom($com,$id){
		$sql="UPDATE com SET nom=:nom,prenom=:prenom,objet=:objet,comentaire=:comentaire WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	   
        $nom=$com->getnom();
        $prenom=$com->getprenom();
          $objet=$com->getobjet();
            $comentaire=$com->getcomentaire();
           
        
		$datas = array(':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':objet'=>$objet, ':comentaire'=>$comentaire);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
        $req->bindValue(':objet',$objet);
            $req->bindValue(':comentaire',$comentaire);
        
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    function recuperercom($id){
		$sql="SELECT * from com where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recherchecom($obj){
      $sql="SELECT * From com where com.objet= '$obj'  ";
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