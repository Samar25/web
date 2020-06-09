<?PHP
include "../config.php";
class LivreC {
function afficherlivre ($livre){
		echo "id_livre: ".$livre->getid()."<br>";
		echo "Nom_livre: ".$livre->getNom()."<br>";
		echo "auteur: ".$livre->getauteur()."<br>";
		echo "prix: ".$livre->getprix()."<br>";
		echo "image: ".$livre->getimage()."<br>";
		echo "quantite: ".$livre->getquantite()."<br>";

	}
	function calculerSalaire($livre){
		echo $livre->getNbHeures() * $livre->getTarifHoraire();
	}
	function ajouterlivre($livre){
		$sql="insert into books (Nom_livre,auteur,prix,image,quantite) values (:Nom_livre,:auteur,:prix,:image,:quantite)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        //$id_livre=$livre->getid();
        $Nom_livre=$livre->getNom();
        $auteur=$livre->getauteur();
        $prix=$livre->getprix();
        $image=$livre->getimage();
        $quantite=$livre->getquantite();

		$req->bindValue(':Nom_livre',$Nom_livre);
		$req->bindValue(':auteur',$auteur);
		$req->bindValue(':prix',$prix);
	    $req->bindValue(':image',$image);
	    $req->bindValue(':quantite',$quantite);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivres(){
		//$sql="SElECT * From livre e inner join formationphp.livre a on e.id_livre= a.id_livre";
		$sql="SElECT * From books";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivre($id_livre){
		$sql="DELETE FROM books where id_livre= :id_livre";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_livre',$id_livre);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){ 
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivre($livre,$id_livre){
		$sql="UPDATE books SET id_livre=:id_livre, Nom_livre=:Nom_livre,auteur=:auteur,prix=:prix,image=:image,quantite=:quantite WHERE id_livre=:id_livre";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $Nom_livre=$livre->getNom();
        $auteur=$livre->getauteur();
        $prix=$livre->getprix();
        $image=$livre->getimage();
        $quantite=$livre->getquantite();

		$datas = array(':id_livre'=>$id_livre, ':Nom_livre'=>$Nom_livre,':auteur'=>$auteur,':prix'=>$prix,':image'=>$image,':quantite'=>$quantite);
		
		$req->bindValue(':id_livre',$id_livre);
		$req->bindValue(':Nom_livre',$Nom_livre);
		$req->bindValue(':auteur',$auteur);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
		
		$req->bindValue(':quantite',$quantite);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererlivre($id_livre){
		$sql="SELECT * from books where id_livre=$id_livre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivres($nom_livre){
		$sql="SELECT * from livre where nom_livre=$nom_livre";
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