<?php
class com{
    private  $id;
    private $nom;
    private $prenom;
    private  $objet;
    private $comentaire;
  


    function __construct($nom,$prenom,$objet,$comentaire){
      
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->objet=$objet;
        $this->comentaire=$comentaire;
       
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

	function getobjet(){
		return $this->objet;
	}
	function getcomentaire(){
		return $this->comentaire;
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
    function setobjet($objet){
		$this->objet=$objet;
	}
	function setcomentaire($comentaire){
		$this->comentaire=$comentaire;
	}

}
?>