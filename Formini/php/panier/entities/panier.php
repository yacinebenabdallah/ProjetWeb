<?PHP
class panier{
	private $id;
	private $id_formation;
	private $etat;

	
	function __construct($id,$id_formation){
		$this->id=$id;
		$this->id_formation=$id_formation;
		
	}
	function getid(){
		return $this->id;
	}
	function getid_formation(){
		return $this->id_formation;
	}
	

	function setid_formation($id_formation){
		$this->id_formation=$id_formation;
	}

	
}

?>