<?php  

/* require 'php/courses/entities/course.php' ; */
 require __DIR__.'/../entities/course.php' ;

class CourseManager
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


  public function add(Course $course)
  {
    $reponse=$this->bd->prepare ('INSERT INTO course VALUES(:id,:name,:bio,:img,:date,:category,:instructor_id,:price,:type,NULL,0)') ;
    $reponse->execute(array(
     'id'=>$course->id() ,
     'name'=>$course->name() ,
     'bio'=>$course->bio() ,
     'img'=>$course->img() ,
     'date'=>$course->date() ,  
     'category'=>$course->category() ,   
     'instructor_id'=>$course->instructor_id() ,   
     'price'=>$course->price() ,  
     'type'=>$course->type()   

    ));
  }
  public function update(Course $course)
  {
    
    $reponse=$this->bd->prepare ('UPDATE course SET id=:id,name=:name,bio=:bio,img=:img,
    date=:date,category=:category,instructor_id=:instructor_id,price=:price,type=:type  WHERE id=:id') ;
    $reponse->execute(array(
     'id'=>$course->id() ,
     'name'=>$course->name() ,
     'bio'=>$course->bio() ,
     'img'=>$course->img() ,
     'date'=>$course->date() ,  
     'category'=>$course->category() ,   
     'instructor_id'=>$course->instructor_id() ,   
     'price'=>$course->price() ,  
     'type'=>$course->type()   

    ));
  }
  public function afficher()
  {
    //$reponse=$this->bd->query( 'SELECT * FROM course '  ) ;
    $reponse=$this->bd->query('SELECT a.id ,a.name ,bio,img,date,category,a.instructor_id,b.name AS instructor_name,price,type
     FROM course a INNER JOIN instructor b ON a.instructor_id=b.id ' ) ; 

    return $reponse ; 
  }
  public function afficher_section($id)
  {
    //$reponse=$this->bd->query( 'SELECT * FROM course '  ) ;
    $reponse=$this->bd->prepare('SELECT * FROM coursesection WHERE id_course=:id' ) ; 
    $reponse->execute(array(
     'id'=>$id
    )); 
    return $reponse ;
  }
  public function get_section($id)
  {
    //$reponse=$this->bd->query( 'SELECT * FROM course '  ) ;
    $reponse=$this->bd->prepare('SELECT * FROM coursesection WHERE id=:id' ) ; 
    $reponse->execute(array(
     'id'=>$id
    )); 
    return $reponse ;
  }
  public function afficher_lecture($id)
  {
    //$reponse=$this->bd->query( 'SELECT * FROM course '  ) ;
    $reponse=$this->bd->prepare('SELECT * FROM courselecture WHERE id_section=:id' ) ; 
    $reponse->execute(array(
     'id'=>$id
    )); 
    return $reponse ;
  }
  public function afficher_quiz($id)
  {
    //$reponse=$this->bd->query( 'SELECT * FROM course '  ) ;
    $reponse=$this->bd->prepare('SELECT * FROM quiz WHERE id_course=:id' ) ; 
    $reponse->execute(array(
     'id'=>$id
    )); 
    return $reponse ;
  }
  public function get_lecture($id)
  {
    //$reponse=$this->bd->query( 'SELECT * FROM course '  ) ;
    $reponse=$this->bd->prepare('SELECT * FROM courselecture WHERE id=:id' ) ; 
    $reponse->execute(array(
     'id'=>$id
    )); 
    return $reponse ;
  }
  public function get($id)
  {
    //$reponse=$this->bd->prepare( 'SELECT * FROM course WHERE id=:id' ) ;
    $reponse=$this->bd->prepare('SELECT a.id ,a.name ,bio,img,date,category,a.instructor_id ,b.name AS instructor_name,price,type FROM course a 
    INNER JOIN instructor b ON a.instructor_id=b.id WHERE a.id=:id' ) ; 
    $reponse->execute(array(
     'id'=>$id
    ));

    return $reponse ;
  }
  public function delete($id)
  {
    $reponse=$this->bd->prepare( 'DELETE FROM course WHERE id=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    
  }
  public function filter($data)
  {
    if($data=='Newest first')
    $reponse=$this->bd->query( 'SELECT a.id ,a.name ,bio,img,date,category,a.instructor_id,b.name AS instructor_name,price,type
     FROM course a INNER JOIN instructor b ON a.instructor_id=b.id ORDER BY date  DESC ' ) ;
    else if($data=='Oldest first')
    $reponse=$this->bd->query( 'SELECT a.id ,a.name ,bio,img,date,category,a.instructor_id,b.name AS instructor_name,price,type
     FROM course a INNER JOIN instructor b ON a.instructor_id=b.id ORDER BY date ASC' ) ;
    else if($data=='Price')
    $reponse=$this->bd->query( 'SELECT a.id ,a.name ,bio,img,date,category,a.instructor_id,b.name AS instructor_name,price,type
     FROM course a INNER JOIN instructor b ON a.instructor_id=b.id ORDER BY price DESC' ) ;
    else if($data=='Title (a-z)')
    $reponse=$this->bd->query( 'SELECT a.id ,a.name ,bio,img,date,category,a.instructor_id,b.name AS instructor_name,price,type
     FROM course a INNER JOIN instructor b ON a.instructor_id=b.id ORDER BY name ASC' ) ; //a l z
    else if($data=='Title (z-a)')
    $reponse=$this->bd->query( 'SELECT a.id ,a.name ,bio,img,date,category,a.instructor_id,b.name AS instructor_name,price,type
     FROM course a INNER JOIN instructor b ON a.instructor_id=b.id ORDER BY name DESC' ) ;

    return $reponse ;
    
  }

  public function get_user($username,$password)
  {
    //$reponse=$this->bd->query( 'SELECT * FROM course '  ) ;
    $reponse=$this->bd->prepare('SELECT * FROM utilisateur WHERE email=:username AND password=:password' ) ; 
    $reponse->execute(array(
     'username'=>$username,
     'password'=>$password
    )); 
    return $reponse ;
  }
  public function update_course($course,$user)
  {
    
    $reponse=$this->bd->prepare ('UPDATE course SET user_id=:user  WHERE id=:id') ;
    $reponse->execute(array(
     'user'=>$user, 
     'id'=>$course 
    ));
  }
  public function get_usercourses($id)
  {
    //$reponse=$this->bd->prepare( 'SELECT * FROM course WHERE id=:id' ) ;
    $reponse=$this->bd->prepare('SELECT * FROM course WHERE user_id=:id' ) ; 
    $reponse->execute(array(
     'id'=>$id
    ));

    return $reponse ;
  }
  public function user_get($id)
  {
    //$reponse=$this->bd->query( 'SELECT * FROM course '  ) ;
    $reponse=$this->bd->prepare('SELECT * FROM utilisateur WHERE id=:id' ) ; 
    $reponse->execute(array(
     'id'=>$id,
    )); 
    return $reponse ;
  }
}
