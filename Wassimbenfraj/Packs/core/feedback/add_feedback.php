<?php  


require 'feedbackManager.php' ;


if(isset($_POST['name']))
{
  $manager= new FeedbackManager() ;
    if(!empty($_POST['title']) && !empty($_POST['name']) && !empty($_POST['message'])
     && !empty($_POST['email']))


    {
      $feedback= new Feedback(array(
        
        'title'=>$_POST['title'],
        'name'=>$_POST['name'],
        'message'=>$_POST['message'],
        'email'=>$_POST['email'],


        
        )) ;
    
        $manager->add($feedback) ;
    
        header('Location: ../../../../course-details.php');
    }
    
}
