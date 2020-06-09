<?PHP
include "../entities/livre.php";
include "../core/livreC.php";

if (isset($_POST['nom_livre']) and isset($_POST['auteur']) and isset($_POST['prix']) and isset($_POST['image']) and isset($_POST['quantite'])){
$livre1=new livre($_POST['nom_livre'],$_POST['auteur'],$_POST['prix'],$_POST['image'],$_POST['quantite']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livre1C=new livreC();
$livre1C->ajouterlivre($livre1);
header('Location: livres.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>