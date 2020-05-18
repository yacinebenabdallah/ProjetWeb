<?php 

class Feedback
{
  private $id ;
  private $name ;
  private $message ;
  private $email;
  private $title;



/* const ME=1 ;
const DEAD=2 ;
const DAMAGED=3 ; */

  public function __construct(array $data)        
  {
    $this->hydrate($data) ;
  }

  public function hydrate(array $data)
  {
    foreach ($data as $key=>$value )
    {
      $method='set'.ucfirst($key) ;
       if(method_exists($this,$method))
       {
         $this->$method($value) ;
       }
    }
  }

  public function id(){return $this->id ;}
  public function name(){return $this->name ;}
  public function Message(){return $this->message ;}
  public function title(){return $this->title ;}
  public function Email(){return $this->email ;}




  public function setId($id)
  {
    $this->id=$id ;
  }
  public function setName($name)
  {
    $this->name=$name ;
  }

  public function setMessage($message)
  {
    $this->message=$message ;
  }
  public function setTitle($title)
  {
    $this->title=$title ;
  }
  public function setEmail($email)
  {
    $this->email=$email ;
  }







}