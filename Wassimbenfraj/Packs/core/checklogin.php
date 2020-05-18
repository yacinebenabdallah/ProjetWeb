<?php  


require 'courseManager.php' ;


if(isset($_POST['username']))
{
  $manager= new CourseManager() ;
    if(!empty($_POST['username']) && !empty($_POST['password']) )
    {
  
        $reponse=$manager->get_user($_POST['username'],$_POST['password']) ;
        if($data=$reponse->fetch())
        {
          session_start();
          $_SESSION['id'] = $data['id'];
          $_SESSION['lastname'] = $data['nom'];
          $_SESSION['firstname'] = $data['prenom'];
          $status = "success";
          $response = "success" ;
          exit(json_encode(array("status" => $status, "response" => $response)));
          //header('Location: ../../../index.php');
        }else {
          $status = "failed";
          $response = "Please verify your credentials" ;
          exit(json_encode(array("status" => $status, "response" => $response)));
      }

      

    }
    
}
