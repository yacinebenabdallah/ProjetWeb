<?php  

/* require 'php/reviews/entities/review.php' ; */
 require __DIR__.'/../../entities/review.php' ;

class ReviewManager
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


  public function add(Review $review)
  {
    $reponse=$this->bd->prepare ('INSERT INTO review(name,email,title,message) VALUES(:name,:email,:title,:message)') ;
    $reponse->execute(array(
/*      'id'=>$review->id() , */
     'name'=>$review->name() ,
     'message'=>$review->message() ,
     'email'=>$review->email() ,
     'title'=>$review->title()  

    ));
  }
  public function update(review $review)
  {
    
    $reponse=$this->bd->prepare ('UPDATE review SET id=:id,name=:name,message=:message,email=:email,
    title=:title,category=:category,instructor_id=:instructor_id,price=:price,type=:type  WHERE id=:id') ;
    $reponse->execute(array(
     'id'=>$review->id() ,
     'name'=>$review->name() ,
     'message'=>$review->message() ,
     'email'=>$review->email() ,
     'title'=>$review->title() ,  
     'category'=>$review->category() ,   
     'instructor_id'=>$review->instructor_id() ,   
     'price'=>$review->price() ,  
     'type'=>$review->type()   

    ));
  }
  public function afficher()
  {
    $reponse=$this->bd->query( 'SELECT * FROM review
    ORDER BY RAND()
    LIMIT 2') ;
/*     $reponse=$this->bd->query('SELECT a.id ,a.name ,message,email,title,category,a.instructor_id,b.name AS instructor_name,price,type
     FROM review a INNER JOIN instructor b ON a.instructor_id=b.id ' ) ;  */

    return $reponse ; 
  }
  public function get($id)
  {
    //$reponse=$this->bd->prepare( 'SELECT * FROM review WHERE id=:id' ) ;
    $reponse=$this->bd->prepare('SELECT b.rating, b.bio, a.name,b.date FROM user a 
  INNER JOIN review b on a.id=b.id_user WHERE b.id_course=:id ' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    return $reponse ;
  }
  public function calculate($id)
  {
    //$reponse=$this->bd->prepare( 'SELECT * FROM review WHERE id=:id' ) ;
    $reponse=$this->bd->prepare('SELECT sum(case when rating=5 then 1 end) as 5star 
    ,sum(case when rating=4 then 1 end) as 4star, sum(case when rating=3 then 1 end) as 3star,
     sum(case when rating=2 then 1 end)as 2star,sum(case when rating=1 then 1 end)as 1star
     ,count(rating) as total FROM user a 
    INNER JOIN review b on a.id=b.id_user WHERE b.id_course=:id  ' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    return $reponse ;
  }
  public function delete($id)
  {
    $reponse=$this->bd->prepare( 'DELETE FROM review WHERE id=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    
  }
}
