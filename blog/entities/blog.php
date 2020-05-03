<?php
class blog {
    private  $id;
    private $titre;
    private $article;
    private  $image;
    private $hachtag;
    private $categorie;


    function __construct($titre,$article,$image,$hachtag,$categorie){
      
        $this->titre=$titre;
        $this->article=$article;
        $this->image=$image;
        $this->hachtag=$hachtag;
        $this->categorie=$categorie;
    }

	
	function getId(){
		return $this->id;
	}
	function getTitre(){
		return $this->titre;
	}
	function getArticle(){
		return $this->article;
	}

	function getImage(){
		return $this->image;
	}
	function getHachtag(){
		return $this->hachtag;
	}
	function getCategorie(){
		return $this->categorie;
	}
        
    function setId($id){
		$this->id=$id;
	}
	function setTitre($titre){
		$this->titre=$titre;
	}
	function setArticle($article){
        $this->article=$article;
    }
    function setImage($image){
		$this->image=$image;
	}
	function setHachtag($hachtag){
		$this->hachtag=$hachtag;
	}
	function setCategorie($categorie){
        $this->categorie=$categorie;
    }
}
?>