<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['ajouter']))
{
$titre=htmlentities(trim($_POST['titre']));
$orgine_video=htmlentities(trim($_POST['orgine_video']));
$realisateur=htmlentities(trim($_POST['realisateur']));
$acteur=htmlentities(trim($_POST['acteur']));
$duree=htmlentities(trim($_POST['duree']));
$date_sortie=htmlentities(trim($_POST['date_sortie']));
$annee_production=htmlentities(trim($_POST['annee_production']));
$description=htmlentities(trim($_POST['description']));
$nom_categorie=htmlentities(trim($_POST['categorie']));
$genre=htmlentities(trim($_POST['genre']));
$lien_image=htmlentities(trim($_POST['lien_image']));
$lien_video=htmlentities(trim($_POST['lien_video']));


$sq="INSERT INTO video VALUES('','$titre','$orgine_video','$realisateur','$acteur','$duree','$date_sortie','$annee_production','$description','$lien_image','$lien_video','$genre','$nom_categorie','')";
 if(mysqli_query($conn,$sq))
      echo "modification avec succes";
      else 
        echo "echec de modification";
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
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="home_admin.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        
          </li>
             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Categorie</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
           <?php
            
             $sql="SELECT DISTINCT NOM_CATEGORIE FROM categorie ";
                $rq=mysqli_query($conn,$sql);
                $i=2;
                while($data=mysqli_fetch_assoc($rq))
                { $i++;?>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href=<?php echo "#collapseMulti2$i" ?>><?php echo $data['NOM_CATEGORIE']; ?></a>
              <ul class="sidenav-third-level collapse" id=<?php echo "collapseMulti2$i" ?>>
             
                <li>
                 <?php
              $NOM_CATEGORIE=$data['NOM_CATEGORIE'];
             $sql1="SELECT g.ID_GENRE ,g.NOM_GENRE,c.ID_CATEGORIE,c.NOM_CATEGORIE FROM  genre as g , categorie as c  WHERE g.ID_CATEGORIE=c.ID_CATEGORIE AND c.NOM_CATEGORIE='$NOM_CATEGORIE'";
                $rq1=mysqli_query($conn,$sql1);
                
                while($ligne=mysqli_fetch_assoc($rq1))
                {if($ligne['NOM_CATEGORIE']=='FILM') 
                {?>
                  <a href=<?php echo "categorie.php?id=".$ligne['ID_GENRE']; ?>><?php echo $ligne['NOM_GENRE'] ; ?></a>
                   <?php
               }else 
               {
                  ?>
                  <a href=<?php echo "serie.php?id=".$ligne['ID_GENRE']; ?>><?php echo $ligne['NOM_GENRE'] ; ?></a>

                  <?php
               }}
               ?>
                </li>
               
               
              </ul>
            </li>
             <?php
               }
                  ?>

          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Gestion Des Utilisateur</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="utilisateur.php">Ajouter Un Utilisateurs</a>
            </li>
            <li>
              <a href="supprimer.php">Supprimer Un Utilisateurs</a>
            </li>
            <li>
              <a href="modifier.php">Modifier les utilisateurs</a>
            </li>
          </ul>
        </li>
        
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Gestion De Video</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="ajouter_v.php">Ajouter Un Video</a>
            </li>
            <li>
              <a href="supprimer_v.php">Supprimer Un Video</a>
            </li>
            <li>
              <a href="modifier_v.php">Modifier les Video</a>
          
          </ul>
          </li>
           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMult12" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Gestion Des Categories/Genres</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMult12">
           
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMult22">Gestion De Categorie</a>
              <ul class="sidenav-third-level collapse" id="collapseMult22">
                <li>
                  <a href="ajouter_c.php">Ajouter Une Categorie</a>
                </li>
                <li>
                  <a href="supprimer_c.php">Supprimer Une Categorie</a>
                </li>
                <li>
                  <a href="modifier_c.php">Modifier une Categorie</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMult24">Gestion De Genre</a>
              <ul class="sidenav-third-level collapse" id="collapseMult24">
                <li>
                  <a href="ajouter_g.php">Ajouter Un Genre</a>
                </li>
                <li>
                  <a href="supprimer_g.php">Supprimer Un Genre</a>
                </li>
                <li>
                  <a href="modifier_g.php">Modifier Un Genre</a>
                </li>
              </ul>
            </li>
            
          </ul>
      
    

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Les Demande d'ajout">
          <a class="nav-link" href="d_ajout.php">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Les Demande d'ajout</span>
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
      <!-- Icon Cards-->


                <!-- ********************************** -->


  <div class="container">

     <div class="card card-register mx-auto mt-5">
      <div class="card-header">Ajouter Un Video Demander</div>
      <div class="card-body">
        <form method="post" action="">

                  <?php
// lancement de la requete
    if(isset($_GET['id_demande']))
    {
      $id=$_GET['id_demande'];
$sql = "SELECT * FROM demande where ID_DEMANDE=".$id;


// on lance la requ??te (mysql_query) et on impose un message d'erreur si la requ??te ne se passe pas bien (or die)
$req = mysqli_query($conn,$sql) ;

// on recupere le resultat sous forme d'un tableau

while($data = mysqli_fetch_assoc($req))
{     ?>
           <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">titre</label>
                <input class="form-control" id="exampleInputName" type="text" name="titre" value="<?php echo $data['TITRE']; ?>">
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">Orgine Video</label>
                <input class="form-control" id="exampleInputName" type="text"  name="orgine_video" value="<?php echo $data['ORGINE_VIDEO']; ?>"   >
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">realisateur</label>
                <input class="form-control" id="exampleInputName" type="text" name="realisateur" value="<?php echo $data['REALSATEUR']; ?>"  >
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">acteur</label>
                <input class="form-control" id="exampleInputName" type="text" name="acteur"  value="<?php echo $data['ACTEUR']; ?>" >
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">dur??e</label>
                <input class="form-control" id="exampleInputName" type="text" name="duree"  value="<?php echo $data['DUREE']; ?> "  >
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">date sortie</label>
                <input class="form-control" id="exampleInputName" type="text" name="date_sortie"  value="<?php echo $data['DATE_SORTIE']; ?> " >
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">annee production</label>
                <input class="form-control" id="exampleInputName" type="text" name="annee_production"  value="<?php echo $data['ANNE_PRODUCTION']; ?>" >
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">description</label>
                <input class="form-control" id="exampleInputName" type="text" name="description"  value="<?php echo $data['DESCRIPTION']; ?> " >
              </div>
          </div>
            <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">lien image</label>
                <input class="form-control" id="exampleInputName" type="text" name="lien_image"  value="<?php echo $data['LIEN_IMAGE']; ?>" >
              </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">lien video</label>
                <input class="form-control" id="exampleInputName" type="text" name="lien_video"  value="<?php echo $data['LIEN_VIDEO']; ?>" >
              </div>
          </div>
       
               <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
              <label >Nom Genre :</label> </br>
              <?php
              $sql2="SELECT g.ID_GENRE,g.NOM_GENRE,v.ID_GENRE,v.ID_VIDEO from genre as g , video as v where v.ID_GENRE=g.ID_GENRE and v.ID_VIDEO='$id'";
                $sql11=mysqli_query($conn,$sql2);

                while($data11=mysqli_fetch_assoc($sql11))
                {
              ?>
                <input  type="text" name="genre" value="<?php echo $data11['NOM_GENRE']; ?>">
              
               <?php
               }
               ?>
              </div>
           </div>
          </div>
         <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
              <label >Nom Genre :</label> </br>
              <?php
              $sql2="SELECT g.ID_CATEGORIE,g.NOM_CATEGORIE,v.ID_CATEGORIE,v.ID_VIDEO from categorie as g , video as v where v.ID_CATEGORIE=g.ID_CATEGORIE and v.ID_VIDEO='$id'";
                $sql11=mysqli_query($conn,$sql2);

                while($data11=mysqli_fetch_assoc($sql11))
                {
              ?>
                <input  type="text" name="categorie" value="<?php echo $data11['NOM_CATEGORIE']; ?>">
              
               <?php
               }
               ?>
              </div>
           </div>
          </div>
          
         
        

           
                         <input type="submit" name="ajouter" class="btn btn-primary btn-block" value="Ajouter"> 
                                 <div class="text-center">

                      <a href="javascript:history.go(-1)" class="d-block small">Retour</a>

                        </div>

 <?php
}}

// on lib??re l'espace m??moire allou?? pour cette interrogation de la base

?>      
    
          
        </form>
        
      </div>
    </div>
    </div>
      
    
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright ?? Your Website 2018</small>
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
              <span aria-hidden="true">??</span>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

