<?php

class speaker {
    private $id;
    private $name;
	private $surname;
	private $age;
	private $specialty;
	private $img1;

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

	
	function getId(){
		return $this->id;
	}
	function getName(){
		return $this->name;
	}
	function getSurname(){
		return $this->surname;
	}
	function getAge(){
		return $this->age;
	}
	function getSpecialty(){
		return $this->specialty;
	}
	function getImg1(){
		return $this->img1;
	}


	
        
    function setId($id){
		$this->id=$id;
	}
	function setName($name){
		$this->name=$name;
	}
	function setSurname($surname){
        $this->surname=$surname;
    }
    function setAge($age){
        $this->age=$age;
    }
    function setSpecialty($specialty){
        $this->specialty=$specialty;
    }
    function setImg1($img1){
        $this->img1=$img1;
    }
    

}
?>