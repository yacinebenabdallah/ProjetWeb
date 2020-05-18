<?php 

class Pack
{
  private $id ;
  private $name ;
  private $bio ;
  private $img;
  private $date;
  private $category;
  private $end_date;
  private $price;
  private $course;


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
  public function end_date(){return $this->end_date ;}
  public function price(){return $this->price ;}
  public function course(){return $this->course ;}



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
  public function setEnd_date($end_date)
  {
    $this->end_date=$end_date ;
  }
  public function setPrice($price)
  {
    $this->price=$price ;
  }
  public function setCourse($course)
  {
    $this->course=$course ;
  }





}