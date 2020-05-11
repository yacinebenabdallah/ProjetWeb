<?php  


require 'courseManager.php' ;


if(isset($_GET['id']))
{
  $manager= new CourseManager() ;

      
    
        $manager->delete($_GET['id']) ;
    
        header('Location: ../../../backend/uni-courses.php'); 
    
     
}
