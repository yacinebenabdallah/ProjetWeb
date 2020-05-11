<?php

 require __DIR__.'/../entities/events.php' ;
require __DIR__.'/../config.php';

class eventManager{

    function ajouterEvent(event $event)
    {
        $sql="insert into event (titre, descrip, date, duree, img, tags, categories, emplacement, speaker1, speaker2, NbPlace)
        values (:titre, :desc, :date, :duree, :img, :tag, :categ, :locat, :speaker1, :speaker2, :NbPlace)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $titre=$event->getTitre();
            $desc=$event->getDesc();
            $date=$event->getDate();
            $duree=$event->getDuree();
            $img=$event->getImg();
            $tag=$event->getTag();
            $categ=$event->getCateg();
            $locat=$event->getLocat();
            $speaker1=$event->getSpeaker1();
            $speaker2=$event->getSpeaker2();
            $NbPlace=$event->getNbPlace();
          
            $req->bindValue(':titre',$titre);
            $req->bindValue(':desc',$desc);
            $req->bindValue(':date',$date);
            $req->bindValue(':duree',$duree);
            $req->bindValue(':img',$img);
            $req->bindValue(':tag',$tag);
            $req->bindValue(':categ',$categ);
            $req->bindValue(':locat',$locat);
            $req->bindValue(':speaker1',$speaker1);
            $req->bindValue(':speaker2',$speaker2);
            $req->bindValue(':NbPlace',$NbPlace);
           
            
                $req->execute();
               
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
            

    }
    function afficherEvents(){ ////affichage trier 
		//$sql="SElECT * From event e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From event order by id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    function supprimerEvent($id){
		$sql="DELETE FROM event where id=:id";
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

    function updateEvent(event $event)
  {
    
    $sql="UPDATE event SET titre=:titre,descrip=:desc, date=:date, duree=:duree, img=:img, tags=:tag, categories=:categ, emplacement=:locat, speaker1=:speaker1, speaker2=:speaker2, NbPlace=:NbPlace WHERE id=:id" ;
    $db = config::getConnexion();
    $reponse->execute(array(
     'id'=>$event->getId() ,
     'titre'=>$event->getTitre() ,
     'desc'=>$event->getDesc() ,
     'date'=>$event->getDate() ,
     'duree'=>$event->getDuree() ,
     'img'=>$event->getImg() ,  
     'categ'=>$event->getCateg() ,   
     'locat'=>$event->getLocat() ,   
     'speaker1'=>$event->getSpeaker1(),
     'speaker2'=>$event->getSpeaker2(),
     'NbPlace'=>$event->getNbPlace()    
   

    ));
  }

    function modifierEvent(event $event){
		$sql="UPDATE event SET titre=:titre,descrip=:desc, date=:date, duree=:duree, img=:img, tags=:tag, categories=:categ, emplacement=:locat, speaker1=:speaker1, speaker2=:speaker2, NbPlace=:NbPlace WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $titre=$event->getTitre();
        $desc=$event->getDesc();
        $date=$event->getDate();
        $duree=$event->getDuree();
        $img=$event->getImg();
        $tag=$event->getTag();
        $categ=$event->getCateg();
        $locat=$event->getLocat();
        $speaker1=$event->getSpeaker1();
        $speaker2=$event->getSpeaker2();
        $id=$event->getId();
        $NbPlace=$event->getNbPlace();
        
		$datas = array(':titre'=>$titre,':desc'=>$desc,':date'=>$date,':duree'=>$duree, ':img'=>$img, ':tag'=>$tag,':categ'=>$categ,':locat'=>$locat,':speaker1'=>$speaker1,':speaker2'=>$speaker2,':id'=>$id,':NbPlace'=>$NbPlace ) ;
            $req->bindValue(':titre',$titre);
            $req->bindValue(':desc',$desc);
            $req->bindValue(':date',$date);
            $req->bindValue(':duree',$duree);
            $req->bindValue(':img',$img);
            $req->bindValue(':tag',$tag);
            $req->bindValue(':categ',$categ);
            $req->bindValue(':locat',$locat);
            $req->bindValue(':speaker1',$speaker1);
            $req->bindValue(':speaker2',$speaker2);
            $req->bindValue(':id',$id);
            $req->bindValue(':NbPlace',$NbPlace);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }

    function modifierNbPlace(event $event){
    	$sql="UPDATE event SET NbPlace=:NbPlace where id=:id";
    	$db = config::getConnexion();

    	try{
    		$req=$db->prepare($sql);
    		$NbPlace=$event->getNbPlace();
    		$datas = array(':NbPlace'=>$NbPlace);
    		$req->bindValue(':NbPlace',$NbPlace);
    		$s=$req->execute();
    	}
    	catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }


    function recupererEvent($id){
		$sql="SELECT * from event e INNER JOIN speaker s ON e.speaker1=s.surname where e.id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererEventSeul($id){
        $sql="SELECT * from event where id=$id";
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