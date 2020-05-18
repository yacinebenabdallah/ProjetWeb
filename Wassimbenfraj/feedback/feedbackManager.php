<?php  

/* require 'php/feedbacks/entities/feedback.php' ; */
 require __DIR__.'/../../entities/feedback.php' ;

class FeedbackManager
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


  public function add(Feedback $feedback)
  {
    $reponse=$this->bd->prepare ('INSERT INTO feedback(name,email,title,message) VALUES(:name,:email,:title,:message)') ;
    $reponse->execute(array(
/*      'id'=>$feedback->id() , */
     'name'=>$feedback->name() ,
     'message'=>$feedback->message() ,
     'email'=>$feedback->email() ,
     'title'=>$feedback->title()  

    ));
  }
  public function update(Feedback $feedback)
  {
    
    $reponse=$this->bd->prepare ('UPDATE feedback SET id=:id,name=:name,message=:message,email=:email,
    title=:title,category=:category,instructor_id=:instructor_id,price=:price,type=:type  WHERE id=:id') ;
    $reponse->execute(array(
     'id'=>$feedback->id() ,
     'name'=>$feedback->name() ,
     'message'=>$feedback->message() ,
     'email'=>$feedback->email() ,
     'title'=>$feedback->title() ,  
     'category'=>$feedback->category() ,   
     'instructor_id'=>$feedback->instructor_id() ,   
     'price'=>$feedback->price() ,  
     'type'=>$feedback->type()   

    ));
  }
  public function afficher()
  {
    $reponse=$this->bd->query( 'SELECT * FROM feedback
    ORDER BY RAND()
    LIMIT 2') ;
/*     $reponse=$this->bd->query('SELECT a.id ,a.name ,message,email,title,category,a.instructor_id,b.name AS instructor_name,price,type
     FROM feedback a INNER JOIN instructor b ON a.instructor_id=b.id ' ) ;  */

    return $reponse ; 
  }
  public function get($id)
  {
    $reponse=$this->bd->prepare( 'SELECT * FROM feedback WHERE id=:id' ) ;
/*     $reponse=$this->bd->prepare('SELECT a.id ,a.name ,message,email,title,category,a.instructor_id,b.name,price,type FROM feedback a 
    INNER JOIN instructor b ON a.instructor_id=b.id WHERE id=:id' ) ; */
    $reponse->execute(array(
     'id'=>$id
    ));

    return $reponse ;
  }
  public function delete($id)
  {
    $reponse=$this->bd->prepare( 'DELETE FROM feedback WHERE id=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    
  }
}
