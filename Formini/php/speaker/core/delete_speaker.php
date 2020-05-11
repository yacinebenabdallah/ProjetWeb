<?php  


require 'speakerManager.php' ;


if(isset($_GET['id']))
{
  $manager= new speakerManager() ;

      
    
        $manager->supprimerSpeaker($_GET['id']) ;
    
        header('Location: ../../../backend/uni-speakers.php'); 
    
     
}
