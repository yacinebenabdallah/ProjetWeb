<?PHP
include_once __DIR__ ."/../../base.php";
require_once __DIR__.'/../entities/utilisateur.php' ;
class utilisateurc {
function afficherUtilisateur (utilisateur $utilisateur){
		echo "Id: ".$utilisateur->getId()."<br>";
		echo "Nom: ".$utilisateur->getNom()."<br>";
		echo "Prénom: ".$utilisateur->getPrenom()."<br>";
		echo "Email: ".$utilisateur->getEmail()."<br>";
		echo "Age: ".$utilisateur->getAge()."<br>";
		echo "Profession: ".$utilisateur->getProfession()."<br>";
		echo "NumTelephone: ".$utilisateur->getNumTelephone()."<br>";
		echo "City: ".$utilisateur->getCity()."<br>";
		echo "Password: ".$utilisateur->getPassword()."<br>";
		echo "ConfirmPassword: ".$utilisateur->getConfirmPassword()."<br>";
				echo "image: ".$utilisateur->getimage()."<br>";

	}
	
	function ajouterUtilisateur(utilisateur $utilisateur){
		$sql="insert into utilisateur (id,nom,prenom,email,age,profession,numTelephone,city,password,confirmPassword) values (:id, :nom,:prenom,:email,:age, :profession, :numTelephone, :city, :password, :confirmPassword)";
		$db = base::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$utilisateur->getId();
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $email=$utilisateur->getEmail();
        $age=$utilisateur->getAge();
        $profession=$utilisateur->getProfession();
        $numTelephone=$utilisateur->getNumTelephone();
        $city=$utilisateur->getCity();
        $password=$utilisateur->getPassword();
        $confirmPassword=$utilisateur->getConfirmPassword();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':age',$age);
		$req->bindValue(':profession',$profession);
		$req->bindValue(':numTelephone',$numTelephone);
		$req->bindValue(':city',$city);
		$req->bindValue(':password',$password);
		$req->bindValue(':confirmPassword',$confirmPassword);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherUtilisateurs(){
		
		$sql="SElECT * From utilisateur";
		$db = base::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerUtilisateur($id){
		$sql="DELETE FROM utilisateur where id= :id";
		$db = base::getConnexion();
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
	function modifierUtilisateur($utilisateur,$id){
		$sql="UPDATE utilisateur SET id=:idd, nom=:nom,prenom=:prenom,email=:emaill,age=:agee ,profession=:prof ,numTelephone=:num,city=:cityy,password=:pass,confirmPassword=:conf WHERE id=:id";
		
		$db = base::getConnexion();
		
try{		
        $req=$db->prepare($sql);
		$idd=$utilisateur->getId();
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $email=$utilisateur->getEmail();
        $age=$utilisateur->getAge();
        $profession=$utilisateur->getProfession();
        $numTelephone=$utilisateur->getNumTelephone();
        $city=$utilisateur->getCity();
        $password=$utilisateur->getPassword();
        $confirmPassword=$utilisateur->getConfirmPassword();


        
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':emaill'=>$email,':agee'=>$age,':prof'=>$profession,':num'=>$numTelephone,':cityy'=>$city,':pass'=>$password,':conf'=>$confirmPassword);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':emaill',$email);
		$req->bindValue(':agee',$age);
		$req->bindValue(':prof',$profession);
		$req->bindValue(':num',$numTelephone);
		$req->bindValue(':cityy',$city);
		$req->bindValue(':pass',$password);
		$req->bindValue(':conf',$confirmPassword);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererUtilisateur($id){
		$sql="SELECT * from utilisateur where id=$id";
		$db = base::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListUtilisateur($id){
		$sql="SELECT * from utilisateur where id=$id";
		$db = base::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


    function afficherut(){
        //$sql="SElECT * From utilisateurs ";
        $sql="SELECT  * From utilisateur INNER JOIN carte WHERE utilisateur.ref_cmd = carte.ref_cmd";
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