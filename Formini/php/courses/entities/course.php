<?php 

class Course
{
  private $id ;
  private $name ;
  private $bio ;
  private $img;
  private $date;
  private $category;
  private $instructor_id;
  private $price;
  private $type;

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
  public function bio(){return $this->bio ;}
  public function img(){return $this->img ;}
  public function date(){return $this->date ;}
  public function category(){return $this->category ;}
  public function instructor_id(){return $this->instructor_id ;}
  public function price(){return $this->price ;}
  public function type(){return $this->type ;}


  public function setId($id)
  {
    $this->id=$id ;
  }
  public function setName($name)
  {
    $this->name=$name ;
  }

  public function setBio($bio)
  {
    $this->bio=$bio ;
  }
  public function setImg($img)
  {
    $this->img=$img ;
  }
  public function setDate($date)
  {
    $this->date=$date ;
  }
  public function setCategory($category)
  {
    $this->category=$category ;
  }
  public function setInstructor_id($instructor_id)
  {
    $this->instructor_id=$instructor_id ;
  }
  public function setPrice($price)
  {
    $this->price=$price ;
  }
  public function setType($type)
  {
    $this->type=$type ;
  }




}