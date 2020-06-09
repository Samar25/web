<?PHP
class Livre{
	private $Nom_livre;
	private $auteur;
	private $prix;
	private $image;
	private $quantite;
	//private $id_Livre;

	function __construct($Nom_livre,$auteur,$prix,$image,$quantite){
		
        $this->Nom_livre=$Nom_livre;
		$this->auteur=$auteur;
		$this->prix=$prix;
		$this->image=$image;
		$this->quantite=$quantite;

	}
	

	function getNom(){
		return $this->Nom_livre;
	}
	function getauteur(){
		return $this->auteur;
	}
	
	function getprix(){
		return $this->prix;
	}

		function getimage(){
		return $this->image;
	}
	function getquantite(){
		return $this->quantite;
	}

	
	function getnbrachat(){
		return $this->nbr_achat;
	}



	function setNom_livre($Nom_livre){
		$this->Nom_livre=$Nom_livre;
	}
	function setauteur($auteur){
		$this->auteur=$auteur;
	}
		function setprix($prix){
		$this->prix=$prix;
	}
	function setimage($image){
		$this->image=$image;
	}
function setquantite($quantite){
		$this->quantite=$quantite;
	}
		
	
}

?>	