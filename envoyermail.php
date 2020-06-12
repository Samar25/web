<?PHP
include_once "mailing.php"; 
include "../../entities/reclamation.php";
include "../../core/reclamationC.php";
    if(isset($_GET['id_reclamation'])){
        $reclamationC=new reclamationC();
        $result=$reclamationC->recupererreclamation($_GET['id_reclamation']);
        foreach($result as $row){
            $id_reclamation=$row['id_reclamation'];
            $id_client=$row['id_client'];
            $type=$row['type'];
            $date=$row['date'];
            $avis=$row['avis'];
            $id_commmande=$row['id_commande'];
            $email=$row['email'];
        }}

       $m=new mailing($email,$type,"desolé pour le retard");
   $m->envoyer(); 

