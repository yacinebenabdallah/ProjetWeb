<?PHP
class coupon{
	private $id;
	private $type;
	private $value;
	private $validite;

	
	function __construct($id,$type,$value,$validite){
		$this->id=$id;
		$this->type=$type;
		$this->value=$value;
		$this->validite=$validite;
		
	}
	function getid(){
		return $this->id;
	}
	function gettype(){
		return $this->type;
	}
	function getvalue(){
		return $this->value;
	}
	function getvalidite(){
		return $this->validite;
	}

	

	function settype($type){
		$this->type=$type;
	}
	function setvalue($value){
		$this->value=$value;
	}
	function setvalidite($validite){
		$this->validite=$validite;
	}


	
}

?>