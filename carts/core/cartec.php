<?PHP
include_once __DIR__."/../../base.php";
require_once __DIR__.'/../entities/carte.php' ;
class cartec {

	function ajouterCarte($utilisateur){
		$sql="insert into carte (idUtilisateur) values (:idUtilisateur)";
		$db = base::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        		
		$req->bindValue(':idUtilisateur',$utilisateur);
		
		
	
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

		
	}
	
       function afficherCartes(){
		
		$sql="SElECT * From carte";
		$db = base::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
function suprimerCarte($utilisateur){
		$sql="DELETE FROM carte where idUtilisateur= :idUtilisateur";
		$db = base::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idUtilisateur',$utilisateur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	
}

?>