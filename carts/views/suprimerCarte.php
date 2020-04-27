<<?php  


require_once __DIR__.'/../core/cartec.php' ;


if(isset($_GET['id']))
{
  $manager= new cartec() ;

      
    
        $manager->suprimerCarte($_GET['id']) ;
    
        header('Location: ../../../backend/uni-carts.php'); 
    
     
}
