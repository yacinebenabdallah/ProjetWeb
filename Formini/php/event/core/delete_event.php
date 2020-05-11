<?php  


require 'eventManager.php' ;


if(isset($_GET['id']))
{
  $manager= new eventManager() ;

      
    
        $manager->supprimerEvent($_GET['id']) ;
    
        header('Location: ../../../backend/uni-events.php'); 
    
     
}
