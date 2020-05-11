<?php  


require 'packManager.php' ;


if(isset($_GET['id']))
{
  $manager= new PackManager() ;

      
    
        $manager->delete($_GET['id']) ;
    
        header('Location: ../../../backend/uni-packs.php'); 
    
     
}
