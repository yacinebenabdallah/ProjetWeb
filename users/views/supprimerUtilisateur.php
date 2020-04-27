<?php  


require_once __DIR__.'/../core/utilisateurc.php' ;


if(isset($_GET['id']))
{
  $manager= new utilisateurc() ;

      
    
        $manager->supprimerUtilisateur($_GET['id']) ;
        require_once __DIR__."/../../carts/views/suprimerCarte.php";

    
        header('Location: ../../../backend/uni-students.php'); 
    
     
}
