<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql0="SELECT count(ID_VIDEO) as nbArt from video where ID_CATEGORIE='1' ";
$req0=mysqli_query($conn,$sql0);
$data0=mysqli_fetch_assoc($req0);

$nbArt=$data0['nbArt'];
$perPage=4;
$nbPage=ceil($nbArt/$perPage);
if(isset($_GET['p']) && $_GET['p']>0 && $_GET['p'] <=$nbPage)
{
    $cPage=$_GET['p'];
}
else
{
    $cPage=1;
}

?>
<!DOCTYPE html>
<html>
<link rel="dns-prefetch" href="https/ajax.googleapis.com/index.html">
<link rel="dns-prefetch" href="https://www.facebook.com/">
<link rel="dns-prefetch" href="https://www.google.com/">

<!-- Mirrored from www.papstream.net/films.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Apr 2018 11:41:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Regarder film streaming vf et vostfr en HD</title>
<meta name="description" content="Voir tous vos films en streaming gratuit sur PapStream" />
<meta name="keywords" content="Film streamig, HD Streaming, film complet, voir film gratuit, film vf, film vostfr, top film streaming, regarder film streaming" />
<link media="screen" href="templates/default/style/style2.css" type="text/css" rel="stylesheet" />
<link media="screen" href="templates/default/style/fa.min.css" type="text/css" rel="stylesheet" />
<link rel="alternate" type="application/rss+xml" title="Film streaming gratuit HD en VF et VOSTFR, série et manga streaming" href="rss.xml" />
<script async src="templates/default/engine/classes/min/index95b195b1.js?charset=utf-8&amp;g=general&amp;17"></script>
<link media="screen" href="templates/default/engine/editor/css/default.css" type="text/css" rel="stylesheet" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#523b67">
<link rel="shortcut icon" href="templates/default/images/favicon.ico" />
<!--[if lte IE 7]>
<link rel="stylesheet" href="/templates/default/style/lte-ie7.css" type="text/css" />
<a href="http://www.microsoft.com/rus/windows/internet-explorer/worldwide-sites.aspx" class="alert"></a>
<![endif]-->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]--><script src="templates/default/js/jquery-1.10.2.js"></script>
</head> <body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = '../connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
<script>
            $(document).ready(function () {
                $.fn.gotoAnchor = function (anchor) {
                    location.href = this.selector;
                }
                $("a#player").click(function (e) {
                    e.preventDefault();
                    $("#full-video").attr("src", $(this).attr("href"));
                    //$('#full-video').gotoAnchor();
                    $('html, body').animate({
                        scrollTop: $('#full-video').offset().top
                    }, 300);
                })
                $("a#mode_cinema").click(function (e) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: $('#full-video').offset().top
                    }, 300);
                    $('#cinema_overlay').fadeIn();
                })
                $("#cinema_close").click(function (e) {
                    e.preventDefault();
                    $('#cinema_overlay').fadeOut();
                })
                $(document).keyup(function (e) {
                    if (e.keyCode == 27) {
                        $('#cinema_overlay').fadeOut();
                    }
                });
            });

            function FastSearch() {
                $(".searchbar-input").attr("autocomplete", "on");
                $(".searchbar-input").blur(function () {
                    $("#searchsuggestions").fadeOut()
                });
                $(".searchbar-input").keyup(function () {
                    var me = $(this);
                    var a = $(this).val();
                    0 == a.length ? $("#searchsuggestions").fadeOut() : dle_search_value != a && 1 < a.length && (clearInterval(dle_search_delay), dle_search_delay = setInterval(function () {
                        _dle_do_search(a, me)
                    }, 300))
                })
            }

            function _dle_do_search(a, me) {
                clearInterval(dle_search_delay);
                $("#searchsuggestions").remove();
                me.after("<div id='searchsuggestions' style='display:none'></div>");
                $.post(dle_root + "search.php", {
                    query: "" + a + ""
                }, function (a) {
                    $("#searchsuggestions").html(a).fadeIn().css({
                        position: "absolute",
                        top: 0,
                        left: 0
                    }).position({
                        my: "left top",
                        at: "left bottom",
                        of: me,
                        collision: "fit flip"
                    })
                });
                dle_search_value = a
            }
            jQuery(function () {
                FastSearch();
            });
        </script>
<script async>
            <!--
            var dle_root = 'index.html';
            var dle_admin = '';
            var dle_login_hash = '';
            var dle_group = 5;
            var dle_skin = 'smartphone';
            var dle_wysiwyg = '1';
            var quick_wysiwyg = '1';
            var dle_act_lang = ["Oui", "Non", "Entrer", "Fermer", "Enregistrer", "supprimer", "En cours. veuillez patienter... "];
            var menu_short = 'Edition rapide';
            var menu_full = 'Edition complète';
            var menu_profile = 'Profil';
            var menu_send = 'Envoyer Message';
            var menu_uedit = 'Administration';
            var dle_info = 'Info';
            var dle_confirm = 'Confirmer';
            var dle_prompt = 'Entrer';
            var dle_req_field = 'Vérifiez toutes les zones requises';
            var dle_del_agree = 'êtes vous sûr de vouloir effacer ce commentaire?';
            var dle_spam_agree = 'Voulez-vous vraiment marquer cet utilisateur comme un spammeur ? Ceci va supprimer tous ses commentaires';
            var dle_complaint = 'Entrez le texte de votre plainte:';
            var dle_big_text = 'Zone de texte selectionnée trop grande.';
            var dle_orfo_title = 'Entrez un commentaire pour Prevenir deune erreur';
            var dle_p_send = 'Envoyer';
            var dle_p_send_ok = 'Envoie de la notification réussis';
            var dle_save_ok = 'Les modifications ont bien été enregistré.';
            var dle_reply_title = '';
            var dle_tree_comm = '0';
            var dle_del_news = 'Supprimer';
            var allow_dle_delete_news = false;
            var dle_search_delay = false;
            var dle_search_value = '';

            //-->
        </script>


<div id="header">
<div id="menu-bar">
<div class="container">
<div class="navbar">
<div class="navbar-header">
<button type="button" class="navbar-toggle radius-3" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Menu</span>
<span class="icon-block">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</span>
</button>
<a class="logotype" href="index.php"><img src="templates/default/images/logo.png" alt="http://www.papstream.net" /></a>
</div>
<div class="navbar-collapse collapse">
<ul class="navbar-nav navbar-right">
<li class="active nav1"><a href="index.php" title="Accueil">Accueil</a></li>
<?php
            
             $sql="SELECT  * FROM categorie ";
                $rq=mysqli_query($conn,$sql);
               $i=2;
                while($data=mysqli_fetch_assoc($rq))
                { if($data['NOM_CATEGORIE']=='FILM')
            {
            ?>

 <li class=<?php echo " nav".$i ; ?> ><a href="video.php" title="<?php echo $data['NOM_CATEGORIE']; ?> Streaming"><?php echo $data['NOM_CATEGORIE'] ; ?></a></li>
<?php
}else
{
?>
 <li class=<?php echo " nav".$i ; ?> ><a href="serie.php" title="<?php echo $data['NOM_CATEGORIE']; ?> Streaming"><?php echo $data['NOM_CATEGORIE'] ; ?></a></li>
<?php } ?>





<li class="dropdown nav3">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Genres"><?php echo $data['NOM_CATEGORIE']. " par genres" ?><span class="caret"></span></a>
<ul class="dropdown-menu">
<?php
   $NOM_CATEGORIE=$data['NOM_CATEGORIE'];
             $sql1="SELECT g.ID_GENRE ,g.NOM_GENRE,c.ID_CATEGORIE,c.NOM_CATEGORIE FROM  genre as g , categorie as c  WHERE g.ID_CATEGORIE=c.ID_CATEGORIE AND c.NOM_CATEGORIE='$NOM_CATEGORIE'";
                $rq1=mysqli_query($conn,$sql1);
                
                while($ligne=mysqli_fetch_assoc($rq1))
                { if($ligne['NOM_CATEGORIE']=='FILM')
                   { ?>
<li><a href=<?php echo "genre.php?id=".$ligne['ID_GENRE']; ?> ><?php echo $ligne['NOM_GENRE']; ?></a></li>
<?php 
}
else 
{
    ?>
<li><a href=<?php echo "genre_serie.php?id=".$ligne['ID_GENRE']; ?> ><?php echo $ligne['NOM_GENRE']; ?></a></li>
<?php
}}
?>
</ul>
</li>
<?php
}
?>
</ul>
</div>
</div>
</div>
</div>
<div id="user-bar">
<div class="container">
<div class="infobar">
<div class="infobar-header">
<button type="button" class="navbar-toggle radius-3" data-toggle="collapse" data-target=".infobar-collapse">
<i class="fa fa-angle-double-down"></i>
</button><ul class="nav-login radius-5">
<li class="dropdown">
<a class="nav-login-user radius-5" href="login.php" title="Profil">
<i class="fa fa-user"></i>S'identifier</span>
</a>
</li>
<li><a href="register.php" title="Inscription sur le site" class="nav-login-user radius-5">Inscription</a></li>
</ul></div>
<div class="mobile-search">
<div class="searchbar radius-3">
<form action="recherche.php" name="searchform" method="post">

<input id="story" name="story" value="Rechercher..." onblur="if(this.value=='') this.value='Rechercher...';" onfocus="if(this.value=='Rechercher...') this.value='';" type="text" class="searchbar-input radius-3" />
<button class="searchbar-btn" type="submit" title="Trouver">
<i class="fa fa-search"></i>
</button>
</form>
</div>
</div>
<div class="infobar-collapse collapse">
<div class="infobar-right">

<div class="searchbar radius-3">
<form action="recherche.php" name="searchform" method="post">
<input type="hidden" name="do" value="search" />
<input type="hidden" name="subaction" value="search" />
<input id="storyy" name="story" value="Rechercher..." onblur="if(this.value=='') this.value='Rechercher...';" onfocus="if(this.value=='Rechercher...') this.value='';" type="text" class="searchbar-input radius-3" />
<button class="searchbar-btn" type="submit" title="Trouver">
<i class="fa fa-search"></i>
</button>
</form>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div><br />



<div id="mainbar" class="container margin-b40">
<div class="row">
<div class="col-md-9 col-xs-12">
<div class="responsive-ad"><script type="text/javascript" src="../adtag.cc/_tags/jstagsf7b8.html?s=fr/papstream/72890_home"></script></div><br />

<div class="responsive-ad"><script type="text/javascript" src="../adtag.cc/_tags/jstagsf7b8.html?s=fr/papstream/72890_home"></script></div><br />
<div class="col-xs-12 block-site-b">
<div class="row">
<div class="owl-cat owl-blue margin-b40 ">
<h2 class="h-owl">
<a href="#" title="Tous les films en Streaming">Tous les films en Streaming</a>
</h2>
   <?php
                  $sq1="SELECT * FROM video where ID_CATEGORIE='1' ORDER BY DATE_SORTIE DESC LIMIT ".(($cPage-1)*$perPage).",$perPage" ;
                  $requete=mysqli_query($conn,$sq1);
                  
                  while ($ligne=mysqli_fetch_array($requete,MYSQLI_NUM))
                  {
                  ?>

<div class="shortstory-in">
<div class="shortstory shortstory-f ">
<div class="short-images ">
<a href="<?php echo "films/films.php?id=".$ligne[0]; ?>"  title=<?php echo $ligne[1]."Streaming VF" ; ?> class="short-images-link">
<img src="<?php  echo $ligne['9'] ?>" alt="<?php echo $ligne[1]; ?>" title=<?php echo $ligne[1]."Streaming VF" ; ?>/>
</a>

</div>
<div class="short-content">
<h4 class="short-link"><a href="<?php echo "films/films.php?id=".$ligne[0]; ?>" title=<?php echo $ligne[1]."Streaming VF" ; ?>><?php echo $ligne[1]; ?></a></h4>
<div class="short-rating">
<div id=<?php echo  "ratig-layer-23878" ?>>
<div class="rating">
<ul class="unit-rating">
<li class="current-rating" style="width:94.0914%;">94.0914</li>
<li><a href="#" title="Mauvais" class="r1-unit" onclick="doRate('1', '8767'); return false;">1</a></li>
<li><a href="#" title="Faible" class="r2-unit" onclick="doRate('2', '8767'); return false;">2</a></li>
<li><a href="#" title="Moyen" class="r3-unit" onclick="doRate('3', '8767'); return false;">3</a></li>
<li><a href="#" title="Bon" class="r4-unit" onclick="doRate('4', '8767'); return false;">4</a></li>
<li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '8767'); return false;">5</a></li>
</ul>
</div></div>
</div>
</div>
</div>
</div>
<?php
}
?>

<div class="clearfix">
    
</div>
<div class="pages">
<div class="row">
 <?php
if($cPage>1)
{
 ?>
<div class="col-lg-1 col-sm-2 col-xs-2 pages-prev"><a href=<?php echo "video.php?p=".($cPage-1); ?>><i class="fa fa-angle-left"></i><b>Précédente</b></a>
</div>
<?php
}
?>

<div class="col-lg-10 col-sm-8 col-xs-8"><div class="pages-numbers">
<?php
for($j=1;$j<=$nbPage;$j++)
    {if($j==$cPage)
        {   echo $j;
            }
            else
            {
?>
<a href=<?php echo "video.php?p=$j"; ?> ><?php echo $j; ?> </a>


 <?php
 }} 

 ?>




 </div>
 </div>
 <?php
if($nbPage>$cPage)
{
 ?>
  <div class="col-lg-1 col-sm-2 col-xs-2 pages-next"><a href=<?php echo "video.php?p=".($cPage+1); ?>><i class="fa fa-angle-right"></i><b>Suivante</b></a></div>
<?php
}
?>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
 <div class="margin-b20">
     
 </div>

</div></div></div></div></div></div>


<div id="copirating">
<div class="container"><p class="copirating">
<i class="fa fa-copyright fa-lg"></i> Film streaming gratuit série et manga streaming </p></div></div>
</div>
<div id="scroller" class="top-scroll" style="display: none;">
<i class="fa fa-angle-up"></i>
</div>
<script async src="templates/default/js/bootstrap.min.js"></script>
<script async src="templates/default/js/owl.carousel.min.js"></script>
<script async src="templates/default/js/libs.js"></script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87278346-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from www.papstream.net/films.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Apr 2018 11:41:42 GMT -->
</html>