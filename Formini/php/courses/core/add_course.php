<?php  


require 'courseManager.php' ;


if(isset($_POST['id']))
{
  $manager= new CourseManager() ;
    if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['bio']) && !empty($_POST['img'])
    && !empty($_POST['date']) && !empty($_POST['category']) && !empty($_POST['instructor_id']) 
    && !empty($_POST['price']) && !empty($_POST['type']) )
    {
      $course= new Course(array(
        
        'id'=>$_POST['id'],
        'name'=>$_POST['name'],
        'bio'=>$_POST['bio'],
        'img'=>$_POST['img'],
        'date'=>$_POST['date'],
        'category'=>$_POST['category'],
        'instructor_id'=>$_POST['instructor_id'],
        'price'=>$_POST['price'],
        'type'=>$_POST['type'],
        
        )) ;
    
        $manager->add($course) ;
    
      
    }
    
}
header('Location: ../../../backend/uni-course-add.html');