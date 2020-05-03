<?php
include "../entities/com.php";
include "../core/comC.php";

if (isset($_GET['nom']) and isset($_GET['prenom']) and isset($_GET['objet']) and isset($_GET['comentaire']) ){
    $com1=new com($_GET['nom'],$_GET['prenom'],$_GET['objet'],$_GET['comentaire']);
    
    $com1C=new comC();
    $com1C->ajouterCom($com1);
    header("Location: http://localhost/Formini/comentaire.php");
    
        
    }else{
        echo "vérifier les champs";
    }
?>