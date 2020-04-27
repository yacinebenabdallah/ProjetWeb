<?PHP
class 	Carte{
	
    private $idUtilisateur;
	private $montant;
	
	
	function __construct($idUtilisateur,$m){
		
		$this->idUtilisateur=$idUtilisateur;
		$this->montant=$m;

		
		
	}
	
	
	function getIdUtilisateur(){
		return $this->idUtilisateur;
	}
	function getMontant(){
		return $this->montant;
	}
	
	
	
	

	
	
	


	
}

?>