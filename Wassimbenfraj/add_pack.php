<?php  


require 'packManager.php' ;


if(isset($_POST['id']))
{
  $manager= new PackManager() ;
  if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['bio']) && !empty($_POST['img'])
  && !empty($_POST['date']) && !empty($_POST['category'])  
  && !empty($_POST['price'])  )
  {
    $date=$_POST['date'] ;
    $time =$date[0].' '.$date[1] ;

    $end_date=$_POST['end_date'] ;
    $end_time =$end_date[0].' '.$end_date[1] ;
    
    
    $courses=$_POST['course'] ;
    $data=array() ;
     foreach($courses as $value)
    {
      
      if(!empty($value))
      {
        array_push($data,$value) ;
      }
        
    }
    $pack= new Pack(array(
      
      'id'=>$_POST['id'],
      'name'=>$_POST['name'],
      'bio'=>$_POST['bio'],
      'img'=>$_POST['img'],
      'date'=>$time,
      'category'=>$_POST['category'],
      'end_date'=>$end_time,
      'price'=>$_POST['price'],
      'course'=>$data
      
      )) ;
     
      $manager->add($pack) ;
  
      header('Location: ../../../backend/uni-pack-add.html');
  }
    
}
