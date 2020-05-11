<?PHP
class commande{
	private $idu;
	private $dat;
	private $som;
	

	
	function __construct($idu,$dat,$som){
		$this->idu=$idu;
		$this->dat=$dat;
		$this->som=$som;
	}
	function getidu(){
		return $this->idu;
	}
	function getdat(){
		return $this->dat;
	}
	function getsom(){
		return $this->som;
	}
	

	function setdat($dat){
		$this->dat=$dat;
	}

	
}

?>