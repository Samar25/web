<?PHP
class categorie{
	private $genre_c;
	private $type_c;
	
	//private $id_categorie;

	function __construct($genre_c,$type_c){
		
        $this->genre_c=$genre_c;
		$this->type_c=$type_c;
	

	}
	

	function getgenre_c(){
		return $this->genre_c;
	}
	function gettype_c(){
		return $this->type_c;
	}
	
	



	function setgenre($genre_c){
		$this->genre=$genre_c;
	}
	function settype($type_c){
		$this->type=$type_c;
	}
	
		
	
}

?>	