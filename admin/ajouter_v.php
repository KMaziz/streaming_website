<?php

session_start();
//Checking User Logged or Not

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['submit']))
{
$titre=htmlentities(trim($_POST['titre']));
$orgine_video=htmlentities(trim($_POST['orgine_video']));
$realisateur=htmlentities(trim($_POST['realisateur']));
$acteur=htmlentities(trim($_POST['acteur']));
$duree=htmlentities(trim($_POST['duree']));
$date_sortie=htmlentities(trim($_POST['date_sortie']));
$annee_production=htmlentities(trim($_POST['annee_production']));
$description=htmlentities(trim($_POST['description']));
$nom_categorie=htmlentities(trim($_POST['nom_categorie']));
$genre=htmlentities(trim($_POST['genre']));
$lien_image=htmlentities(trim($_POST['lien_image']));
$lien_video=htmlentities(trim($_POST['lien_video']));

$sql="INSERT INTO videos VALUES('','$titre','$orgine_video','$realisateur','$acteur','$duree','$date_sortie','$annee_production','$description','$nom_categorie','$genre','$lien_image','$lien_video')";

$req=mysqli_query($conn,$sql);
if($req)
echo "insertion avec succes";
else
echo "impossible d'insertion";



}






?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="../welcome.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Gestion Des Utilisateur</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="../utilisateur.php">Ajouter Un Utilisateurs</a>
            </li>
            <li>
              <a href="../supprimer.php">Supprimer Un Utilisateurs</a>
            </li>
            <li>
              <a href="../modifier.php">Modifier les utilisateurs</a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Gestion De Video</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
             <li>
              <a href="ajouter_v.php">Ajouter Un Video</a>
            </li>
            <li>
              <a href="supprimer_v.php">Supprimer Un Video</a>
            </li>
            <li>
              <a href="modifier_v.php">Modifier les Video</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="contact">
          <a class="nav-link" href="contact.php">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Contact Us</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2" >
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" name ="Nom" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
        
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>


  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Ajouter Un Video</div>
      <div class="card-body">
        <form method="POST" action="">
           <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">titre</label>
                <input class="form-control" id="exampleInputName" type="text" name="titre" aria-describedby="nameHelp" placeholder="Enter titre">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">Orgine Video</label>
                <input class="form-control" id="exampleInputName" type="text" name="orgine_video" aria-describedby="nameHelp" placeholder="Enter url image">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">realisateur</label>
                <input class="form-control" id="exampleInputName" type="text" name="realisateur" aria-describedby="nameHelp" placeholder="Enter description">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">acteur</label>
                <input class="form-control" id="exampleInputName" type="text" name="acteur" aria-describedby="nameHelp" placeholder="Enter description">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">durée</label>
                <input class="form-control" id="exampleInputName" type="text" name="duree" aria-describedby="nameHelp" placeholder="Enter description">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">date sortie</label>
                <input class="form-control" id="exampleInputName" type="date" name="date_sortie" aria-describedby="nameHelp" placeholder="Enter description">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">annee production</label>
                <input class="form-control" id="exampleInputName" type="text" name="annee_production" aria-describedby="nameHelp" placeholder="Enter description">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">description</label>
                <input class="form-control" id="exampleInputName" type="text" name="description" aria-describedby="nameHelp" placeholder="Enter description">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">nom categorie</label>
                <input class="form-control" id="exampleInputName" type="text" name="nom_categorie" aria-describedby="nameHelp" placeholder="Enter description">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">genre</label>
                <input class="form-control" id="exampleInputName" type="text" name="genre" aria-describedby="nameHelp" placeholder="Enter description">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">lien image</label>
                <input class="form-control" id="exampleInputName" type="text" name="lien_image" aria-describedby="nameHelp" placeholder="Enter description">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">lien video</label>
                <input class="form-control" id="exampleInputName" type="text" name="lien_video" aria-describedby="nameHelp" placeholder="Enter description">
              </div>
          </div>

           
                         <input type="submit" name="submit" class="btn btn-primary btn-block" value="Register">  
          
        </form>
        
      </div>
    </div>
  </div>




          <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

