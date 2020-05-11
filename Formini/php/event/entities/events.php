<?php

class event {
    private $id;
    private $titre;
	private $desc;
	private $date;
	private $duree;
	private $img;
	private $tag;
	private $categ;
	private $locat;
	private $speaker1;
	private $speaker2;
	private $NbPlace;

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
	function getTitre(){
		return $this->titre;
	}
	function getDesc(){
		return $this->desc;
	}
	function getDate(){
		return $this->date;
	}
	function getDuree(){
		return $this->duree;
	}
	function getImg(){
		return $this->img;
	}
	function getTag(){
		return $this->tag;
	}
	function getCateg(){
		return $this->categ;
	}
	function getLocat(){
		return $this->locat;
	}
	function getSpeaker1(){
		return $this->speaker1;
	}
	function getSpeaker2(){
		return $this->speaker2;
	}
	function getNbPlace(){
		return $this->NbPlace;
	}

	
        
    function setId($id){
		$this->id=$id;
	}
	function setTitre($titre){
		$this->titre=$titre;
	}
	function setDesc($desc){
        $this->desc=$desc;
    }
    function setDate($date){
        $this->date=$date;
    }
    function setDuree($duree){
        $this->duree=$duree;
    }
    function setImg($img){
		$this->img=$img;
	}
    function setTag($tag){
        $this->tag=$tag;
    }
    function setCateg($categ){
        $this->categ=$categ;
    }
    function setLocat($locat){
        $this->locat=$locat;
    }
    function setSpeaker1($speaker1){
        $this->speaker1=$speaker1;
    }
    function setSpeaker2($speaker2){
        $this->speaker2=$speaker2;
    }
    function setNbPlace($NbPlace){
    	$this->NbPlace=$NbPlace;
    }

}
?>