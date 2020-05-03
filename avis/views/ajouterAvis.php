<?php
include "../entities/avis.php";
include "../core/avisC.php";

if (isset($_GET['nom']) and isset($_GET['prenom']) and isset($_GET['email']) and isset($_GET['message']) and isset($_GET['note']) and isset($_GET['id_article'])){
    $avis1=new avis($_GET['nom'],$_GET['prenom'],$_GET['email'],$_GET['message'],$_GET['note'],$_GET['id_article']);
    
    $avis1C=new avisC();
    $avis1C->ajouteravis($avis1);
   header("Location: http://localhost/Formini/blog.php");
    
        
    }
    else
    {
        echo "vérifier les champs";
    }
?>