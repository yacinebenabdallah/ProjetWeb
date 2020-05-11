<?PHP

include_once __DIR__."/../../config.php";

class panierC {
	



	function ajouterpanier($panier){
		$sql="insert into panier (id,id_formation)
 values (:id, :id_formation)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$panier->getid();
        $id_formation=$panier->getid_formation();
      
		$req->bindValue(':id',$id);
		$req->bindValue(':id_formation',$id_formation);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpaniers(){
		
		$sql="SELECT b.id as id,etat,b.id_formation as idf ,name,price from panier b INNER JOIN course a on b.id_formation=a.id where b.id = ".$_SESSION['id'];
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}	
		
	}
	function afficherpaniersback(){
		
		$sql="SELECT b.id ,etat,b.id_formation as idf ,name,price from panier b INNER JOIN course a on b.id_formation=a.id ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}	
		
	}
	function supprimerpanier($id){
		$sql="DELETE FROM panier where id_formation= :id and id=".$_SESSION['id'];
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
	
	function sommepanier(){
		$sql="SELECT b.id ,SUM(price) as som from panier b INNER JOIN course a on b.id_formation=a.id where etat=0 and b.id =".$_SESSION['id'];
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function acheterpanier($date){
		$sql="UPDATE panier SET etat=:etat WHERE etat=0 and id =".$_SESSION['id'];
		$db = config::getConnexion();
		
		$req=$db->prepare($sql);
		
		$req->bindValue(':etat',$date);
		
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function verifierpanier($id){
		$sql="SELECT * from panier where id_formation=$id and etat=0 and id=".$_SESSION['id'];
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql)->rowcount();
		
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerpaniers($date,$id){
		$sql="DELETE FROM panier where etat= '$date' and id=$id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		
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
