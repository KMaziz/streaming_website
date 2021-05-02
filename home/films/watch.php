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
<link rel="dns-prefetch" href="http://www.papstream.net/series/https//ajax.googleapis.com/">
<link rel="dns-prefetch" href="https://www.facebook.com/">
<link rel="dns-prefetch" href="https://www.google.com/">

<!-- Mirrored from www.papstream.net/series/scorpion-saison-4-episode-1-81403.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Apr 2018 12:14:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Série Scorpion saison 4 episode 1 en streaming vf et vostfr</title>
<meta name="description" content="Regarder série Scorpion saison 4 episode 1 en streaming VF et VOSTFR" />
<meta name="keywords" content="Série streamig, HD Streaming, série complet, voir série gratuit, série vf, série vostfr, top série streaming, regarder série streaming, Scorpion saison 4 episode 1" />
<link rel="canonical" href="http://www.papstream.net/series/scorpion-saison-4-episode-1-81403.html" />
<meta property="og:image" content="http://www.papstream.net/poster/serie/2017-09/scorpion-saison-4-5529-5652.jpg" />
<meta property="og:title" content="Série Scorpion saison 4 episode 1 en streaming vf et vostfr" />
<meta property="og:url" content="http://www.papstream.net/series/scorpion-saison-4-episode-1-81403.html" />
<meta property="og:description" content="Série Scorpion saison 4 episode 1 en streaming vf et vostfr" />
<meta property="og:type" content="http://www.papstream.net/series/video.movie" />
<meta property="fb:app_id" content="651817644979368" />
<link media="screen" href="http://www.papstream.net/templates/default/style/style2.css" type="text/css" rel="stylesheet" />
<link media="screen" href="http://www.papstream.net/templates/default/style/fa.min.css" type="text/css" rel="stylesheet" />
<link rel="alternate" type="application/rss+xml" title="Film streaming gratuit HD en VF et VOSTFR, série et manga streaming" href="http://www.papstream.net/series/rss.xml" />
<script async src="http://www.papstream.net/templates/default/engine/classes/min/index95b1.js?charset=utf-8&amp;g=general&amp;17"></script>
<link media="screen" href="http://www.papstream.net/templates/default/engine/editor/css/default.css" type="text/css" rel="stylesheet" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#523b67">
<link rel="shortcut icon" href="http://www.papstream.net/templates/default/images/favicon.ico" />
<!--[if lte IE 7]>
<link rel="stylesheet" href="/templates/default/style/lte-ie7.css" type="text/css" />
<a href="http://www.microsoft.com/rus/windows/internet-explorer/worldwide-sites.aspx" class="alert"></a>
<![endif]-->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]--><script type="text/javascript" src="http://www.papstream.net/jscripts/plus.js"></script><script type="text/javascript"> var siteurl = "http://www.papstream.net/";   function loadit( element){var videoplay = document.getElementById('videoplay');videoplay.src=element.rel;var navt=document.getElementById('navt').getElementsByTagName("a");for (var i=0; i < navt.length; i++){if(navt[i].rel == element.rel) navt[i].className="active";else navt[i].className="";}}  function startit(){var navt=document.getElementById('navt').getElementsByTagName("a");var videoplay = document.getElementById('videoplay');videoplay.src = navt[0].rel;} window.onload=startit;</script><script language="javascript" type="text/javascript" src="http://www.papstream.net/js/wra.js"></script><link rel="stylesheet" type="text/css" href="http://www.papstream.net/templates/default/css/commentaire.css" /><link rel="stylesheet" type="text/css" href="http://www.papstream.net/templates/default/css/episode.css" /><script src="http://www.papstream.net/templates/default/js/jquery-1.10.2.js"></script>
</head> <body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12';
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
            var dle_root = 'http://www.papstream.net/';
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
<a class="logotype" href="index.php"><img src="../templates/default/images/logo.png" alt="http://www.papstream.net" /></a>
</div>
<div class="navbar-collapse collapse">
<ul class="navbar-nav navbar-right">
<li class="active nav1"><a href="../index.php" title="Accueil">Accueil</a></li>
<?php
            
             $sql="SELECT  * FROM categorie ";
                $rq=mysqli_query($conn,$sql);
               $i=2;
                while($data=mysqli_fetch_assoc($rq))
                { if($data['NOM_CATEGORIE']=='FILM')
            {
            ?>

 <li class=<?php echo " nav".$i ; ?> ><a href="../video.php" title="<?php echo $data['NOM_CATEGORIE']; ?> Streaming"><?php echo $data['NOM_CATEGORIE'] ; ?></a></li>
<?php
}else
{
?>
 <li class=<?php echo " nav".$i ; ?> ><a href="../serie.php" title="<?php echo $data['NOM_CATEGORIE']; ?> Streaming"><?php echo $data['NOM_CATEGORIE'] ; ?></a></li>
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
<li><a href=<?php echo "../genre.php?id=".$ligne['ID_GENRE']; ?> ><?php echo $ligne['NOM_GENRE']; ?></a></li>
<?php 
}
else 
{
    ?>
<li><a href=<?php echo "../genre_serie.php?id=".$ligne['ID_GENRE']; ?> ><?php echo $ligne['NOM_GENRE']; ?></a></li>
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
<a class="nav-login-user radius-5" href="../login.php" title="Profil">
<i class="fa fa-user"></i>S'identifier</span>
</a>
</li>
<li><a href="../register.php" title="Inscription sur le site" class="nav-login-user radius-5">Inscription</a></li>
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
<form action="../recherche.php" name="searchform" method="post">
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




<div class="responsive-ad"><script type="text/javascript" src="https://adtag.cc/_tags/jstags.js?s=fr/papstream/72890_home"></script></div><br />
<script>
        $(function() {
            $("html,body").animate({
   scrollTop: $("#full-video").offset().top
});
});
</script>
<?php
if(isset($_GET['id'] ))
{   

    $id=$_GET['id'];
$id_video=$_SESSION['id_video'];

$id_saison=$_SESSION['id_saison'];

$sqla="SELECT v.ID_VIDEO,v.TITRE,v.ORGINE_VIDEO,v.REALSATEUR,v.ACTEUR,v.DUREE,v.DATE_SORTIE,v.ANNE_PRODUCTION,v.DESCRIPTION,v.LIEN_IMAGE,v.LIEN_VIDEO,v.ID_GENRE,v.ID_CATEGORIE,c.ID_CATEGORIE,c.NOM_CATEGORIE,g.ID_GENRE,g.NOM_GENRE,s.NOM_SAISON,s.ID_VIDEO,s.ID_SAISON,e.ID_EPISODE,e.NUM_EPISODE,e.ID_SAISON,e.NOM_EPISODE FROM video as v,categorie as c ,genre as g , saison as s,episode e where  v.ID_CATEGORIE=c.ID_CATEGORIE and g.ID_GENRE=v.ID_GENRE and s.ID_VIDEO=v.ID_VIDEO and s.ID_SAISON=e.ID_SAISON  and e.ID_EPISODE='$id' "; 
// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$reqa = mysqli_query($conn,$sqla) ;

// on recupere le resultat sous forme d'un tableau
while($dataa=mysqli_fetch_assoc($reqa))
{    
?>
<div id="mainbar" class="container margin-b40">
<div class="row">
<div class="col-md-9 col-xs-12">
<div class="row">
<div class="speedbar">
<span id="dle-speedbar"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../index.php" itemprop="url"><span itemprop="title">Papstream</span></a></span> » <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../serie.php" itemprop="url"><span itemprop="title">Séries</span></a></span> » <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href=<?php echo "series.php?id=".$_SESSION['id_video'] ; ?> itemprop="url"><span itemprop="title">Saison</span></a> » <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href=<?php echo "episode.php?id=".$_SESSION['id_saison'] ; ?> itemprop="url"><span itemprop="title">Episode</span></a></span> »<?php echo $dataa['NOM_EPISODE']; ?></span>
</div>
<div id="dle-content"><div class="fullstory">
<h1 class="fstory-h1">
<span class="fstory-favorites" title="">
<a href="" target="_blank"><img src="http://www.papstream.net/img/google.png" alt="Partager"></a>
</span>
<b><span class="masha_index masha_index1" rel="1"></span><?php echo "Regarder en streaming".$dataa['TITRE']; ?></b>
</h1>
<div id="fstory-film" class="margin-b40 block-p">
<div class="row">
<div class="col-sm-4 col-xs-12 fstory-poster-in">
<div class="fstory-poster">
<img src="<?php echo $dataa['LIEN_IMAGE']; ?>" alt="<?php echo $dataa['TITRE']."en streaming français"; ?>" title="<?php echo $dataa['TITRE']."en streaming français"; ?>" style="width: 238; height: 320;">
</div>
<div class="clearfix"></div>
<div class="rating-sys 5529">

</div>
</div>
<div class="col-sm-8 col-xs-12">
<div class="finfo">
<span class="finfo-line"></span>
<div class="finfo-block">
<div class="finfo-title"><span class="masha_index masha_index4" rel="4"></span>Titre:</div>
<div class="finfo-text"><b><span class="masha_index masha_index5" rel="5"></span><?php echo $dataa['TITRE']; ?> </b><?php echo $dataa['NOM_SAISON']; ?> </div>
</div>
</div>


<div class="finfo">
<span class="finfo-line"></span>
 <div class="finfo-block">
<div class="finfo-title"><span class="masha_index masha_index15" rel="15"></span>Genre:</div>
<div class="finfo-text"><a ><span class="masha_index masha_index16" rel="16"></span><?php echo $dataa['NOM_GENRE']; ?></a>   </div>
</div>
</div>
<div class="finfo">
<span class="finfo-line"></span>
<div class="finfo-block">
<div class="finfo-title"><span class="masha_index masha_index17" rel="17"></span>Réalisateur:</div>
<div class="finfo-text"><span class="masha_index masha_index18" rel="18"></span><a  title="série créée par Nick Santora"><?php echo $dataa['REALSATEUR']; ?></a>, </div>
</div>
</div>
<div class="finfo">
<span class="finfo-line"></span>
<div class="finfo-block">
<div class="finfo-title"><span class="masha_index masha_index19" rel="19"></span>Acteurs:</div>
<div class="finfo-text"><span class="masha_index masha_index20" rel="20"></span><a href="http://www.papstream.net/series/acteur/eddie-kaye-thomas.html" title="Regarder Série Eddie Kaye Thomas"><?php echo $dataa['REALSATEUR']; ?></a> </div>
</div>
</div>
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
<i class="fa fa-eye"></i><?php echo $roww['VUE'] ; ?>
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
<div class="clearfix"></div>
</div>
</div>
<?php

}}
?>

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
<script async src="http://www.papstream.net/templates/default/js/bootstrap.min.js"></script>
<script async src="http://www.papstream.net/templates/default/js/owl.carousel.min.js"></script>
<script async src="http://www.papstream.net/templates/default/js/libs.js"></script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87278346-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from www.papstream.net/series/scorpion-saison-4-episode-1-81403.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Apr 2018 12:14:32 GMT -->
</html>