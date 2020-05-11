<?php  

/* require 'php/packs/entities/pack.php' ; */
 require __DIR__.'/../entities/pack.php' ;

class PackManager
{

   private $bd ;

   public function __construct()
   {
     
      try
      {
       $this->bd = new PDO('mysql:host=localhost;dbname=formini;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
   }


  public function add(Pack $pack)
  {
    $reponse=$this->bd->prepare ('INSERT INTO pack VALUES(:id,:name,:date,:end_date,:price,:category,:img,:bio)') ;
    $reponse->execute(array(
     'id'=>$pack->id() ,
     'name'=>$pack->name() ,
     'bio'=>$pack->bio() ,
     'img'=>$pack->img() ,
     'date'=>$pack->date() ,  
     'category'=>$pack->category() ,   
     'end_date'=>$pack->end_date() ,   
     'price'=>$pack->price()  
   

    ));
    $courses=$pack->course() ;
    print_r($courses) ;
    
    foreach ($courses as  $value)
    { 
      $data=(int)$value ;
      $reponse=$this->bd->prepare ('UPDATE course SET pack_id=:pack_id WHERE id=:id') ;
      $reponse->execute(array(
       'pack_id'=>$pack->id() ,
       'id' => $data
      ));
     } 
  }
  public function update(Pack $pack)
  {
    
    $reponse=$this->bd->prepare ('UPDATE pack SET id=:id,name=:name,bio=:bio,img=:img,
    date=:date,category=:category,end_date=:end_date,price=:price WHERE id=:id') ;
    $reponse->execute(array(
     'id'=>$pack->id() ,
     'name'=>$pack->name() ,
     'bio'=>$pack->bio() ,
     'img'=>$pack->img() ,
     'date'=>$pack->date() ,  
     'category'=>$pack->category() ,   
     'end_date'=>$pack->end_date() ,   
     'price'=>$pack->price()  
   

    ));
  }
  public function afficher()
  {
    $reponse=$this->bd->query( 'SELECT * FROM pack ') ;
/*       SELECT a.id AS pack_id ,a.name AS pack_name,a.date AS start_date , end_date 
    ,a.price as pack_price,a.category AS category,a.img AS img ,a.bio As pack_bio
    ,b.id AS course_id,b.name AS course_name ,b.bio AS course_bio ,b.price AS course_price
    ,b.type AS type ,instructor_id FROM pack a INNER JOIN course b on a.id=b.pack_id  
*/

    return $reponse ; 
  }
  public function get($id)
  {
    $reponse=$this->bd->prepare( 'SELECT * FROM pack WHERE id=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    return $reponse ;
  }
  public function delete($id)
  {
    $reponse=$this->bd->prepare( 'DELETE FROM pack WHERE id=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    
  }
}
