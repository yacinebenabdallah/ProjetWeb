<?PHP
class Utilisateur{
	private $id;
	private $nom;
	private $prenom;
	private $email;
	private $age;
	private $profession;
	private $numTelephone;
	private $city;
	private $image;
	private $password;
	private $confirmPassword;
	function __construct($id,$nom,$prenom,$em,$ag,$pr,$nu,$ci,$pas,$coo){
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$em;
		$this->age=$ag;
		$this->profession=$pr;
		$this->numTelephone=$nu;
		$this->city=$ci;
		$this->password=$pas;
		$this->confirmPassword=$coo;
		
	}
	
	function getId(){
		return $this->id;
	}
	function getimage(){
		return $this->image;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getEmail(){
		return $this->email;
	}
	function getAge(){
		return $this->age;
	}
	function getProfession(){
		return $this->profession;
	}
	function getNumTelephone(){
		return $this->numTelephone;
	}
	function getCity(){
		return $this->city;
	}
	function getPassword(){
		return $this->password;
	}
	function getConfirmPassword(){
		return $this->confirmPassword;
	}

	function setNom(){
		return $this->nom;
	}
	function setPrenom(){
		return $this->prenom;
	}
	function setEmail(){
		return $this->email;
	}
	function setAge(){
		return $this->age;
	}
	function setProfession(){
		return $this->profession;
	}
	function setNumTelephone(){
		return $this->numTelephone;
	}
	function setCity(){
		return $this->city;
	}
	function setPassword(){
		return $this->password;
	}
	function setConifirmPassword(){
		return $this->confirmPassword;
	}
	


	
}

?>