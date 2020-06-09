<?PHP
include_once "../config.php";
class categorieC {
function affichercategorie ($categorie){
		echo "id_categorie: ".$categorie->getid()."<br>";
		echo "genre_c: ".$categorie->getgenre_c()."<br>";
		echo "type_c: ".$categorie->gettype_c()."<br>";
	

	}
	function calculerSalaire($categorie){
		echo $categorie->getNbHeures() * $categorie->getTarifHoraire();
	}
	function ajoutercategorie($categorie){
		$sql="insert into categorie (genre_c,type_c) values (:genre_c,:type_c)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        //$id_categorie=$categorie->getid();
        $genre_c=$categorie->getgenre_c();
        $type_c=$categorie->gettype_c();
       
		$req->bindValue(':genre_c',$genre_c);
		$req->bindValue(':type_c',$type_c);
	

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercategories(){
		//$sql="SElECT * From categorie e inner join formationphp.categorie a on e.id_categorie= a.id_categorie";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercategorie($id_categorie){
		$sql="DELETE FROM categorie where id_categorie= :id_categorie";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_categorie',$id_categorie);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){ 
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercategorie($categorie,$id_categorie){
		$sql="UPDATE categorie SET id_categorie=:id_categorie, genre_c=:genre_c, type_c=:type_c WHERE id_categorie=:id_categorie";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $genre_c=$categorie->getgenre_c();
        $type_c=$categorie->gettype_c();
       
		$datas = array(':genre_c'=>$genre_c,':type_c'=>$type_c,':id_categorie'=>$id_categorie);
		
		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':genre_c',$genre_c);
		$req->bindValue(':type_c',$type_c);
	
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperercategorie($id_categorie){
		$sql="SELECT * from categorie where id_categorie=$id_categorie";
		$db = config::getConnexion();
		try{
		$liste1=$db->query($sql);
		return $liste1;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecategories($tarif){
		$sql="SELECT * from categorie where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>