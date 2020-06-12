<?PHP
class Livre{
	private $id_Livre;
	private $prix;
	private $quantite;
	private $prixt;

	//private $id_Livre;

	function __construct($id_Livre,$prix,$quantite,$prixt){
		
        $this->id_livre=$id_livre;
		$this->auteur=$auteur;
		$this->prix=$prix;
		$this->quantite=$quantite;

	}
	

	function getid(){
		return $this->id_livre;
	}

	
	function getprix(){
		return $this->prix;
	}

	function getquantite(){
		return $this->quantite;
	}
	function getprixt(){
		return $this->prixt;
	}
	




	
	
		function setprixt($prixt){
		$this->prixt=$prixt;
	}

function setquantite($quantite){
		$this->quantite=$quantite;
	}
		
	
}

?>	