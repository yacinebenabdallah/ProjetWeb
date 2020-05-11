<?PHP

include_once __DIR__."/../../config.php";

class commandeC {
	



	function ajoutercommande($commande){
		$sql="insert into commande (idu,dat,som)
 values (:idu, :dat, :som)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idu=$commande->getidu();
		$dat=$commande->getdat();
		$som=$commande->getsom();
      
		$req->bindValue(':idu',$idu);
		$req->bindValue(':dat',$dat);
		$req->bindValue(':som',$som);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercommandes(){
		
		$sql="SELECT id,idu,dat as etat,som as price from commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}	
		
	}
	
	function supprimercommande($idu){
		$sql="DELETE FROM commande where id=:idu";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idu',$idu);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupereridcommande($idu,$dat){
		
		$sql="SELECT id from commande where dat='$dat' and idu=$idu";
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
