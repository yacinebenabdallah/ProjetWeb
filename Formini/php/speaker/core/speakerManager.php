<?php

 require __DIR__.'/../entities/speakers.php' ;
require __DIR__.'/../config.php';

class speakerManager{

    function ajouterSpeaker(speaker $speaker)
    {
        $sql="insert into speaker (name, surname, age, specialty, img1)
        values (:name, :surname, :age, :specialty, :img1)";
        $db = config1::getConnexion();
        try{
            $req=$db->prepare($sql);

            $name=$speaker->getName();
            $surname=$speaker->getSurname();
            $age=$speaker->getAge();
            $specialty=$speaker->getSpecialty();
            $img1=$speaker->getImg1();
            
          
            $req->bindValue(':name',$name);
            $req->bindValue(':surname',$surname);
            $req->bindValue(':age',$age);
            $req->bindValue(':specialty',$specialty);
            $req->bindValue(':img1',$img1);
            
           
            
                $req->execute();
               
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
            

    }
    function afficherSpeakers(){ ////affichage trier 
		//$sql="SElECT * From speaker e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From speaker order by id";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    function supprimerSpeaker($id){
		$sql="DELETE FROM speaker where id=:id";
		$db = config1::getConnexion();
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



    function modifierSpeaker(speaker $speaker){
		$sql="UPDATE speaker SET name=:name,surname=:surname, age=:age, specialty=:specialty, img1=:img1 WHERE id=:id";
		
		$db = config1::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $name=$speaker->getName();
        $surname=$speaker->getSurname();
        $age=$speaker->getAge();
        $specialty=$speaker->getSpecialty();
        $img1=$speaker->getImg1();
        $id=$speaker->getId();
        
		$datas = array(':name'=>$name,':surname'=>$surname,':age'=>$age,':specialty'=>$specialty,':img1'=>$img1,':id'=>$id);
            $req->bindValue(':name',$name);
            $req->bindValue(':surname',$surname);
            $req->bindValue(':age',$age);
            $req->bindValue(':specialty',$specialty);
            $req->bindValue(':img1',$img1);
            $req->bindValue(':id',$id);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }

    function recupererSpeaker($id){
		$sql="SELECT * from speaker where id=$id";
		$db = config1::getConnexion();
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