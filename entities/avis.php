<?php
class avis{
    private  $id;
    private $nom;
    private $prenom;
    private  $email;
    private $message;
  	private $note;
  	private $id_article;
      
  


    function __construct($nom,$prenom,$email,$message,$note,$id_article){
      
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->message=$message;
         $this->note=$note;
          $this->id_article=$id_article;
       
    }

	
	function getId(){
		return $this->id;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}

	function getemail(){
		return $this->email;
	}
	function getmessage(){
		return $this->message;
	}
	function getnote(){
		return $this->note;
	}
	function getid_article(){
		return $this->id_article;
	}
	
        
    function setId($id){
		$this->id=$id;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
        $this->prenom=$prenom;
    }
    function setemail($email){
		$this->email=$email;
	}
	function setmessage($message){
		$this->message=$message;
	}
	function setnote($note){
		$this->note=$note;
	}
	function setid_article($id_article){
		$this->id_article=$id_article;
	}



}
?>