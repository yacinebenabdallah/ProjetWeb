<?PHP

include_once "../entities/utilisateur.php";
include_once "../core/utilisateurc.php";

	


     $utilisateurC=new utilisateurc();
	$utilisateur=new utilisateur($_GET['id'],$_GET['nom'],$_GET['prenom'],$_GET['emaill'],$_GET['agee'],$_GET['prof'],$_GET['num'],$_GET['cityy'],$_GET['pass'],$_GET['conf']);
	$utilisateurC->modifierUtilisateur($utilisateur,$_GET['id']);
	header('Location: ../../../backend/uni-students.php');

?>



