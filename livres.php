<!--
=========================================================
 Material Dashboard - v2.1.1
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!doctype html>
<html lang="en">
<?PHP include "../core/livreC.php";
$livre=new livreC();
$liste=$livre->afficherlivres();
include_once "../core/categorieC.php";
$categorie=new categorieC();
$liste1=$categorie->affichercategories();
?>
<head>
  <title>Book Thief</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    BOOK THIEF

        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="#0">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
            </li>
            <li class="nav-item active ">
            <a class="nav-link" href="livres.php">
              <i class="material-icons">Livres</i>
              <p>Livres</p>
            </a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="./Marketing.php">
              <i class="material-icons">Marketing</i>
              <p>Marketing</p>
            </a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="./Clients.php">
              <i class="material-icons">Clients</i>
              <p>Clients</p>
            </a>
            </li>
             <li class="nav-item ">
            <a class="nav-link" href="./Service.php">
              <i class="material-icons">Service</i>
              <p>Service Aprés Vente</p>
            </a>
            </li>
         
            <li class="nav-item ">
            <a class="nav-link" href="./Forum.php">
              <i class="material-icons">Forum</i>
              <p>Forum</p>
            </a>
            </li>
              <li class="nav-item ">
            <a class="nav-link" href="./Commandes.php">
              <i class="material-icons">Commandes</i>
              <p>Commandes</p>
            </a>
            </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Livres</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>

        </div>
      </nav>
      <!-- End Navbar -->
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">

                  <!-- CRUD livre begins-->

                 <div align="left">
                  <form method="POST" action="ajoutlivre.php">
<table>
<caption>Ajouter Livre</caption>
<tr>
<td>Nom livre</td>
<td><input type="text" name="nom_livre"></td>
</tr>
<tr>
<td>auteur</td>
<td><input type="text" name="auteur"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="number" name="prix"></td>
</tr>
 <tr><td> image  </td><td><input id="image" type="file" name="image"></td></tr>
<tr>
<td>Quantité</td>
<td><input type="number" name="quantite"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>


</table>
</form>
<?php
if (isset($_GET['id_livre'])){
  $livreC=new livreC();
    $result=$livreC->recupererlivre($_GET['id_livre']);
  foreach($result as $row){
    $nom_livre=$row['nom_livre'];
    $auteur=$row['auteur'];
    $prix=$row['prix'];
    $image=$row['image'];
    $quantite=$row['quantite'];
?>
</div>




<div align="right">
                  <form method="POST" action="modifierlivre.php">

<table>
<caption>Modifier Livre</caption>

<tr>
  <td>Nom livre</td>
<td><input type="text" name="nom_livre" value="<?PHP echo $nom_livre ?>"></td>
</tr>
<tr>
<td>auteur</td>
<td><input type="text" name="auteur" value="<?PHP echo $auteur ?>"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
 <tr><td> image  </td><td><input id="image" type="file" name="image" value="<?PHP echo $image ?>"></td></tr>
<tr>
<td>Quantité</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_livre" value="<?PHP echo $_GET['id_livre'];?>"></td>
</tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>


</table>
</form>
<?php
}
}
?>
</div>
 <!--CRUD livre ends-->

    <!--CRUD categories begins-->
 <div align="left">
                  <form method="POST" action="ajoutcategorie.php">
<table>
<caption>Ajouter categories</caption>
<tr>
<td>genre</td>
<td><input type="text" name="genre_c"></td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type_c"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>


</table>
</form>
<?php
if (isset($_GET['id_categorie'])){
  $categorieC=new categorieC();
    $result1=$categorieC->recuperercategorie($_GET['id_categorie']);
  foreach($result1 as $row){
    $id_categorie=$row['id_categorie'];
    $genre_c=$row['genre_c'];
    $type_c=$row['type_c'];
    ?>
</div>




<div align="right">
                  <form method="POST" action="modifiercategorie.php">

<table>
<caption>Modifier categories</caption>

<tr>
  <td>genre</td>
<td><input type="text" name="genre_c" value="<?PHP echo $genre_c ?>"></td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type_c" value="<?PHP echo $type_c ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="" name="id_categorie" value="<?PHP echo $_GET['id_categorie'];?>"></td>
</tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>


</table>
</form>
<?php
}
}
?>
</div>
 <!--crud categories ends-->


                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <!--affichage livres begins-->

                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID livre
                        </th>
                        <th>
                          Nom Livre
                        </th>
                        <th>
                          Auteur
                        </th>
                        <th>
                          prix
                        </th>
                         <th>
                           image
                         </th>
                           <th>
                           quantite
                         </th>
                           <th>
                           Gérer
                         </th>
                      </thead>
                      <tbody>
                        <?php foreach($liste as $row) {
                        ?>
                        <tr>
                          <td>
                            <?PHP echo $row['id_livre']; ?>
                          </td>
                           <td>
                            <?PHP echo $row['nom_livre']; ?>
                          </td>
                          <td>
                            <?PHP echo $row['auteur']; ?>
                          </td>
                          <td class="text-primary">
                            $<?PHP echo $row['prix']; ?>
                          </td>
                            <td>
                           <img src="images/<?PHP echo $row['image']; ?>" width="42"> 
                          </td>
                            <td>
                            <?PHP echo $row['quantite']; ?>
                          </td>
                            <td>
                            <form method="POST" action="supprimerlivre.php">
  <input class="btn btn-primary btn-round" type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['id_livre']; ?>" name="id_livre">
  </form>
    <a href="livres.php?id_livre=<?PHP echo $row['id_livre']; ?>" name= "modifier1">modifier</a>

                          </td>
                        </tr> <?PHP
}
?>
                        
                      </tbody>
                    </table>
                        <!--affichage livres ends-->
                   
                    
                    <!--affichage categories begins-->
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID categorie
                        </th>
                        <th>
                          genre
                        </th>
                        <th>
                          type
                        </th>
                           <th>
                           Gérer
                         </th>
                      </thead>
                      <tbody>
                        <?php 
                        
                        foreach($liste1 as $row) {
                        ?>
                        <tr>
                          <td>
                            <?PHP echo $row['id_categorie']; ?>
                          </td>
                           <td>
                            <?PHP echo $row['genre_c']; ?>
                          </td>
                          <td>
                            <?PHP echo $row['type_c']; ?>
                          </td>

                                                   <td>
                            <form method="POST" action="supprimercategorie.php">
  <input class="btn btn-primary btn-round" type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['id_categorie']; ?>" name="id_categorie">
  </form>
    <a href="livres.php?id_categorie=<?PHP echo $row['id_categorie']; ?>" name="id_categorie">modifier</a>

                          </td>
                        </tr> <?PHP
}
?>
                            
                      </tbody>
                    </table>

                    <!--affichage categories ends-->

                  </div>
                </div>
              </div>
            </div>
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>

</html>
