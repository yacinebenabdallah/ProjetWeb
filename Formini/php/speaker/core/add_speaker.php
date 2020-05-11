<?php  


require 'speakerManager.php' ;


if(isset($_POST['ajouter']))
{
  $manager= new speakerManager() ;
    if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['age']) && !empty($_POST['specialty'])
    && !empty($_POST['img1']) )
    {
      $speaker= new speaker(array(
        'id'=>$_POST['id'],
        'name'=>$_POST['name'],
        'surname'=>$_POST['surname'],
        'age'=>$_POST['age'],
        'specialty'=>$_POST['specialty'],
        'img1'=>$_POST['img1'],

        )) ;
    
        $manager->ajouterSpeaker($speaker) ;
    
      
    }
    
}
header('Location: ../../../backend/uni-speaker-add.html');