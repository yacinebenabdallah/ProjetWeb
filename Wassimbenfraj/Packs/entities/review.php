<?php 

class Review
{
  private $id ;
  private $id_pack ;
  private $id_user ;
  private $id_course;
  private $rating;
  private $bio;
  private $date;
  private $imh;



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
  public function id_pack(){return $this->id_pack ;}
  public function id_user(){return $this->id_user ;}
  public function id_course(){return $this->id_course ;}
  public function rating(){return $this->rating ;}
  public function bio(){return $this->bio ;}
  public function date(){return $this->date ;}
  public function img(){return $this->img ;}





  public function setId($id)
  {
    $this->id=$id ;
  }
  public function setId_pack($id_pack)
  {
    $this->id_pack=$id_pack ;
  }

  public function setId_user($id_user)
  {
    $this->id_user=$id_user ;
  }
  public function setId_course($id_course)
  {
    $this->id_course=$id_course ;
  }
  public function setRating($rating)
  {
    $this->rating=$rating ;
  }
  public function setBio($bio)
  {
    $this->bio=$bio ;
  }
  public function setDate($date)
  {
    $this->date=$date ;
  }
  public function setimg($img)
  {
    $this->img  =$img ;
  }





}