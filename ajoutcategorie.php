<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

if (isset($_POST['genre_c']) and isset($_POST['type_c'])){
$categorie1=new categorie($_POST['genre_c'],$_POST['type_c']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$categorie1C=new categorieC();
$categorie1C->ajoutercategorie($categorie1);
header('Location: livres.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>