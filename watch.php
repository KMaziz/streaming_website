<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['submit']))
{

$episode=$_POST['episode'];

  echo $episode;
    header('location:watch.php?id='.$episode);
}

?>

<!DOCTYPE html>
<html>
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
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/episode.css">
    <link media="screen" href="http://www.papstream.net/templates/default/engine/editor/css/default.css" type="text/css" rel="stylesheet" />


    <link rel="stylesheet" type="text/css" href="css/watch.css">



</head> 
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
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
  
















<?php
if(isset($_GET['id'] ))
{   

    $id=$_GET['id'];

$id_saison=$_SESSION['id_saison'];

$sqla="SELECT v.ID_VIDEO,v.TITRE,v.ORGINE_VIDEO,v.REALSATEUR,v.ACTEUR,v.DUREE,v.DATE_SORTIE,v.ANNE_PRODUCTION,v.DESCRIPTION,v.LIEN_IMAGE,v.LIEN_VIDEO,v.ID_GENRE,v.ID_CATEGORIE,c.ID_CATEGORIE,c.NOM_CATEGORIE,g.ID_GENRE,g.NOM_GENRE,s.NOM_SAISON,s.ID_VIDEO,s.ID_SAISON,e.ID_EPISODE,e.NUM_EPISODE,e.ID_SAISON,e.NOM_EPISODE FROM video as v,categorie as c ,genre as g , saison as s,episode e where  v.ID_CATEGORIE=c.ID_CATEGORIE and g.ID_GENRE=v.ID_GENRE and s.ID_VIDEO=v.ID_VIDEO and s.ID_SAISON=e.ID_SAISON  and e.ID_EPISODE='$id' "; 
// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$reqa = mysqli_query($conn,$sqla) ;

// on recupere le resultat sous forme d'un tableau
while($dataa=mysqli_fetch_assoc($reqa))
{    
?>

<div class="right">
   <div class="col-sm-4">
     <img src="<?php echo $dataa['LIEN_IMAGE'];   ?>"   class="textOver"/>
     </div>
<div class="col-md-6">
  <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th><h3  class="text-warning"> Titre:</h3></th>
                  <td><?php echo $dataa['TITRE']; ?></th>
                </tr>
                <tr>
                  <th><h3  class="text-warning">Realisateur:</h3></th>
                  <td><?php echo $dataa['REALSATEUR']; ?></th>
                </tr>
                <tr>
                  <th><h3  class="text-warning"> Acteurs:</h3></th>
                  <td><?php echo $dataa['ACTEUR']; ?></th>
                </tr>
                <tr>
                  <th><h3  class="text-warning"> Categorie:</h3></th>
                  <td><?php echo $dataa['NOM_CATEGORIE']; ?></th>
                </tr>
                 <tr>
                  <th><h3  class="text-warning"> Genre:</h3></th>
                  <td><?php echo $dataa['NOM_GENRE']; ?></th>
                </tr>
              </thead>
              </table>
              </div>

   </div>




   </div>
 </div>

 </br>
  </br>

  <div class="col-lg-12">
  <h3  class="text-warning"> Description :</h3>
  <p><?php echo $dataa['DESCRIPTION']; ?>
</p>
  </div>

  </br>
 </br>
 </br>
 </br>
 <div class="row">
    <div class="col-sm-6" align="left ">
       <h4  class="text-warning"> Durée :</h4>
       <p><?php echo $dataa['DUREE']; ?></p>
    </div>
    <div class="col-sm-6" align="right" >
            <h4  class="text-warning"> Date de sortie :</h4>
            <p><?php echo $dataa['DATE_SORTIE']; ?></p>
    </div>
  </div>

<div class="fstory-content margin-b40 block-p"><span class="masha_index masha_index23" rel="23"></span>
<h2><center><?php echo "Regarder".$dataa['TITRE']." ".$dataa['NOM_SAISON'].", episode".$dataa['NUM_EPISODE'] ; ?> </center></h2></div>

<?php
}
?>
<script type="text/javascript" src="https://adtag.cc/_tags/jstags.js?s=fr/papstream/vp"></script><br />

<script language="javascript" type="text/javascript" src="http://www.papstream.net/js/wra.js"></script>
<script type="text/javascript">
        function fetch_select(val)
        {
            var value = $("#txt_name").val();
            $.ajax({
                type: 'post',
                url: '/get_episode.php',
                data: {
                    get_option: val, slug: value
                },
                success: function (response) {
                    $('.episodeselect').html(response);
                }
            });

        }
    </script>
<?php

$id_video=$_SESSION['id_saison'];


$sql2="SELECT v.ID_VIDEO,v.TITRE,v.ORGINE_VIDEO,v.REALSATEUR,v.ACTEUR,v.DUREE,v.DATE_SORTIE,v.ANNE_PRODUCTION,v.DESCRIPTION,v.VUE,v.LIEN_IMAGE,v.LIEN_VIDEO,v.ID_GENRE,v.ID_CATEGORIE,s.NOM_SAISON,s.ID_VIDEO,s.ID_SAISON,e.ID_EPISODE,e.NUM_EPISODE,e.ID_SAISON FROM video as v, saison as s,episode e where v.ID_VIDEO='$id_video' and s.ID_SAISON='$id_saison' and s.ID_VIDEO=v.ID_VIDEO and s.ID_SAISON=e.ID_SAISON and e.ID_EPISODE='$id'  ";
// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req2 = mysqli_query($conn,$sqla) ;

// on recupere le resultat sous forme d'un tableau
while($row=mysqli_fetch_assoc($req2))
{    

?>
<div class="panel-body">
<form method="POST" action="" id="vehicleRegFrm">
<input name="slug" type="hidden" value="scorpion-saison-4-episode-1-81403" id="txt_name">
<div class="row">
<div class="col-md-33 col-xs-12">
<?php
if((!($row['ID_EPISODE']==1)) )
{
    ?>
<a class="col-xs-12 btn btn-success spa" href=<?php echo "watch.php?id=".($row['ID_EPISODE']-1); ?> ><i class="fa fa-arrow-left" aria-hidden="true"></i> Episode Précédent </a>
<?php
}
?>
</div>
<div class="col-md-6">
<div class="roww">

<div class="col-md-10">

<select name="episode" class="episodeselect form-control" >
<?php
$re1=mysqli_query($conn,"SELECT e.ID_SAISON,e.NOM_EPISODE,e.NUM_EPISODE,e.ID_EPISODE,s.ID_SAISON,s.NOM_SAISON from episode as e , saison as s where s.ID_SAISON=e.ID_SAISON");
while($ro1=mysqli_fetch_assoc($re1))
{ ?>
<option  value="<?php echo $ro1['ID_EPISODE']; ?>" >
<?php echo $ro1['NOM_SAISON']." / Episode ".$ro1['NUM_EPISODE']; ?>

</option>

<?php
}
?>
</select>

</div>
<div class="col-md-2">
<input type="submit" value="Go" class="spa btn btn-primary col-xs-12 lien" name="submit">
</div>
</div>
</div>
<div class="col-md-34 col-xs-12">
<?php
if($row['ID_SAISON']==$id_saison)
{
    ?>

<a class="col-xs-12 btn btn-success spa" href=<?php echo "watch.php?id=".($row['ID_EPISODE']+1); ?>>Episode Suivant <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
<?php
}
?>
</div>
</div>
</form>
</div><br /><div class="responsive-ad"><script type="text/javascript" src="https://adtag.cc/_tags/jstags.js?s=fr/papstream/72890_up"></script></div><br /><div id="full-video" style="margin-top: 10px;"><div>
<div class="wprp_wrapper">
<div class="col-sm-12">
<div class="col-sm-6 col-xs-12 ">
</div>
<div class="col-sm-6 col-xs-12 fstory-info-right">
<script async="" src="http://yastatic.net/share/share.js" charset="utf-8"></script>
<ul class="ul-infoicon">
<li>
<div class="" data-yasharel10n="ru" data-yasharetype="large"  data-yasharetheme="counter" data-yasharelink="http://www.papstream.net/series/scorpion-saison-4-episode-1-81403.html">
<iframe style="display: none" src="<?php echo $dataa['LIEN_VIDEO']; ?>"></iframe></span></div></li>
<li>
<iframe src="<?php echo $dataa['LIEN_VIDEO']; ?>" width="78" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

</li></ul>
</div>
</div>
<div class="clearfix"></div>


</div>
<div class="video-responsive" id="video-responsive"> <script>
            $(document).ready(function () {
                $("#playerPubClose").click(function () {
                    $("#playerPub").fadeOut();
                });
            });
        </script>
<div id="playerPub">
<div class="responsive-ad"><script type="text/javascript" src="https://adtag.cc/_tags/jstags.js?s=fr/papstream/300250ov"></script></div> </div>
<iframe id="videoplay" class="load" scrolling="no" frameborder="0" allowfullscreen="" onclick="<?php 
    $sqlvue = "UPDATE video SET vue = vue+1 where ID_VIDEO='$id_video'";  
    $reqvue = mysqli_query($conn,$sqlvue); 
    ?>" src="<?php echo $row['LIEN_VIDEO']; ?>"></iframe>
</div></div></div>

<div class="fstory-info block-p">
<div class="row">
<div class="col-sm-6 col-xs-12 fstory-info-left">
<ul class="ul-infoicon">
<li><a href="javascript:history.go(-1)"><i class="fa fa-arrow-circle-o-left"></i><span class="masha_index masha_index25" rel="25"></span>Retour</a></li>
<li class="dropdown">
<a href="#fullstory-info" title="Information de l'article" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<i class="fa fa-user"></i><span class="masha_index masha_index26" rel="26"></span>Infos<span class="caret"></span>
</a>
<ul class="dropdown-menu" style="opacity: 0;">
<li><i class="fa fa-calendar"></i><?php echo $row['DATE_SORTIE'] ; ?></li>

<li>
<?php
$sqq="SELECT * from video v where v.ID_VIDEO='$id_video' ";
$rqq=mysqli_query($conn,$sqq);
while ($roww =mysqli_fetch_assoc($rqq)) {
    
?>
<?php
}
?>

</li>
</ul>
</li>

</ul>
</div>
</div>
</div>
<?php
}}
?>
</div>
</div>




   </br>
 </br>
 </br>

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

<!-- Mirrored from www.papstream.net/series/scorpion-saison-4-episode-1-81403.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Apr 2018 12:14:32 GMT -->
</html>