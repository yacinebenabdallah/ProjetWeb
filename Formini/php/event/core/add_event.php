<?php  


require 'eventManager.php' ;


if(isset($_POST['ajouter']))
{
  $manager= new eventManager() ;
    if(!empty($_POST['id']) && !empty($_POST['titre']) && !empty($_POST['desc']) && !empty($_POST['date']) && !empty($_POST['duree']) && !empty($_POST['img'])
    && !empty($_POST['tag']) && !empty($_POST['categ']) && !empty($_POST['locat']) 
    && !empty($_POST['speaker1']) && !empty($_POST['speaker2']) && !empty($_POST['NbPlace']) )
    {
      $event= new event(array(
        'id'=>$_POST['id'],
        'titre'=>$_POST['titre'],
        'desc'=>$_POST['desc'],
        'date'=>$_POST['date'],
        'duree'=>$_POST['duree'],
        'img'=>$_POST['img'],
        'tag'=>$_POST['tag'],
        'categ'=>$_POST['categ'],
        'locat'=>$_POST['locat'],
        'speaker1'=>$_POST['speaker1'],
        'speaker2'=>$_POST['speaker2'],
        'NbPlace'=>$_POST['NbPlace'],
        
        )) ;
    
        $manager->ajouterEvent($event) ;
    
      
    }
    
}
header('Location: ../../../backend/uni-event-add.php');