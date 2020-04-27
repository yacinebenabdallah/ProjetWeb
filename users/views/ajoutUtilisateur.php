<?PHP
include_once "../entities/utilisateur.php";
include_once "../core/utilisateurc.php";





if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['age'])and isset($_POST['profession'])and isset($_POST['numTelephone'])and isset($_POST['city'])and isset($_POST['password'])and isset($_POST['confirmPassword'])){
$utilisateur1=new utilisateur($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['age'],$_POST['profession'],$_POST['numTelephone'],$_POST['city'],$_POST['password'],$_POST['confirmPassword']);
//Partie2
/*
var_dump($utilisateur1);
}
*/
//Partie3
if ($_POST['password']==$_POST['confirmPassword'])
{
$utilisateur1C=new utilisateurc();
$utilisateur1C->ajouterUtilisateur($utilisateur1);
require_once __DIR__."/../../carts/views/ajoutCarte.php";



 $sql="INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `date` , `lien`) VALUES (NULL, 'utilisatuer', 'ADD', 'A utilisateur has been Added', 'unread', CURRENT_TIMESTAMP, 'uni-students.php');";
		$db = base::getConnexion();

		try{
      
				        $req=$db->prepare($sql);

            $req->execute();
           
        }
          catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
header('Location: ../../../index.html');
}
else{
	echo "vérifier les champs";
}	
}else{
	echo "vérifier les champs";
}
//*/

?>