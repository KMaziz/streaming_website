 

 <?php //Connection avec la BDD.

    session_start();

         

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
      




?>

<!DOCTYPE html>
<html>


<!-- Mirrored from www.papstream.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Apr 2018 11:37:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Film streaming gratuit HD en VF et VOSTFR, série et manga streaming</title>
<meta name="description" content="Les meilleurs film, séries, manga en streaming HD sur PapStream" />
<meta name="keywords" content="Film streamig, HD Streaming, film complet, voir film gratuit, film vf, film vostfr, top film streaming, regarder film streaming" />
<link rel="canonical" href="index.php" />
<meta property="og:image" content="templates/default/images/logo.png" />
<meta property="og:url" content="index.php" />
<meta property="og:type" content="404.html" />
<meta property="fb:app_id" content="651817644979368" />
<link media="screen" href="templates/default/style/style2.css" type="text/css" rel="stylesheet" />
<link media="screen" href="templates/default/style/fa.min.css" type="text/css" rel="stylesheet" />


<link rel="alternate" type="application/rss+xml" title="Film streaming gratuit HD en VF et VOSTFR, série et manga streaming" href="rss.xml" />

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
            var dle_root = 'index.php';
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
</div><br /><div class="responsive-ad"><script type="text/javascript" src="../adtag.cc/_tags/jstagsf7b8.html?s=fr/papstream/72890_home"></script></div><br /><div id="slider-bar" class="block-violet">
<div class="container">
<div class="owl-film owl-violet">
<h1 class="h-owl h-owl-big"><b>Films Box office</b></h1>
<div class="owl-box">
<div id="owl-slider" class="owl-carousel"><div class="shortstory-in">
<div class="shortstory radius-3">
<div class="short-images radius-3">
<a href="films/wind-river-a6FW.html" title="Wind River Streaming VF" class="short-images-link">
<img src="thumbnail/film/2017-09/wind-river-5904.jpg" alt="Wind River" title="Wind River Streaming VF" />
</a>
<span class="film-rip"><a href="films/qualite/bdrip.html">Bdrip</a></span>
<span class="film-language"><a href="films/langue/vf.html">VF</a></span>
</div>
<div class="short-content">
<h4 class="short-link"><a href="films/wind-river-a6FW.html" title="Wind River Streaming VF">Wind River</a></h4>
<div class="short-rating">
<div id='ratig-layer-8557'><div class="rating">
<ul class="unit-rating">
<li class="current-rating" style="width:99.6678%;">99.6678</li>
<li><a href="#" title="Mauvais" class="r1-unit" onclick="doRate('1', '8557'); return false;">1</a></li>
<li><a href="#" title="Faible" class="r2-unit" onclick="doRate('2', '8557'); return false;">2</a></li>
<li><a href="#" title="Moyen" class="r3-unit" onclick="doRate('3', '8557'); return false;">3</a></li>
<li><a href="#" title="Bon" class="r4-unit" onclick="doRate('4', '8557'); return false;">4</a></li>
<li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '8557'); return false;">5</a></li>
</ul>
</div></div>
</div>
</div>
</div>
</div><div class="shortstory-in">
<div class="shortstory radius-3">
<div class="short-images radius-3">
<a href="films/seven-sisters.html" title="Seven Sisters Streaming VF" class="short-images-link">
<img src="thumbnail/film/2017-08/seven-sisters-7170.jpg" alt="Seven Sisters" title="Seven Sisters Streaming VF" />
</a>
<span class="film-rip"><a href="films/qualite/brrip.html">BRrip</a></span>
<span class="film-language"><a href="films/langue/vf.html">VF</a></span>
</div>
<div class="short-content">
<h4 class="short-link"><a href="films/seven-sisters.html" title="Seven Sisters Streaming VF">Seven Sisters</a></h4>
<div class="short-rating">
<div id='ratig-layer-8511'><div class="rating">
<ul class="unit-rating">
<li class="current-rating" style="width:98.2592%;">98.2592</li>
<li><a href="#" title="Mauvais" class="r1-unit" onclick="doRate('1', '8511'); return false;">1</a></li>
<li><a href="#" title="Faible" class="r2-unit" onclick="doRate('2', '8511'); return false;">2</a></li>
<li><a href="#" title="Moyen" class="r3-unit" onclick="doRate('3', '8511'); return false;">3</a></li>
<li><a href="#" title="Bon" class="r4-unit" onclick="doRate('4', '8511'); return false;">4</a></li>
<li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '8511'); return false;">5</a></li>
</ul>
</div></div>
</div>
</div>
</div>
</div><div class="shortstory-in">
<div class="shortstory radius-3">
<div class="short-images radius-3">
<a href="films/november-criminals.html" title="November Criminals Streaming VF" class="short-images-link">
<img src="thumbnail/film/2017-12/november-criminals-4716.jpg" alt="November Criminals" title="November Criminals Streaming VF" />
</a>
<span class="film-rip"><a href="films/qualite/bdrip.html">Bdrip</a></span>
<span class="film-language"><a href="films/langue/vf.html">VF</a></span>
</div>
<div class="short-content">
<h4 class="short-link"><a href="films/november-criminals.html" title="November Criminals Streaming VF">November Criminals</a></h4>
<div class="short-rating">
<div id='ratig-layer-8761'><div class="rating">
<ul class="unit-rating">
<li class="current-rating" style="width:73.4934%;">73.4934</li>
<li><a href="#" title="Mauvais" class="r1-unit" onclick="doRate('1', '8761'); return false;">1</a></li>
<li><a href="#" title="Faible" class="r2-unit" onclick="doRate('2', '8761'); return false;">2</a></li>
<li><a href="#" title="Moyen" class="r3-unit" onclick="doRate('3', '8761'); return false;">3</a></li>
<li><a href="#" title="Bon" class="r4-unit" onclick="doRate('4', '8761'); return false;">4</a></li>
<li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '8761'); return false;">5</a></li>
</ul>
</div></div>
</div>
</div>
</div>
</div><div class="shortstory-in">
<div class="shortstory radius-3">
<div class="short-images radius-3">
<a href="films/hitman-bodyguard-f8sZv.html" title="Hitman & Bodyguard Streaming VF" class="short-images-link">
<img src="thumbnail/film/2017-08/hitman-bodyguard-6174.jpg" alt="Hitman & Bodyguard" title="Hitman & Bodyguard Streaming VF" />
</a>
<span class="film-rip"><a href="films/qualite/bdrip.html">Bdrip</a></span>
<span class="film-language"><a href="films/langue/vf.html">VF</a></span>
</div>
<div class="short-content">
<h4 class="short-link"><a href="films/hitman-bodyguard-f8sZv.html" title="Hitman & Bodyguard Streaming VF">Hitman & Bodyguard</a></h4>
<div class="short-rating">
<div id='ratig-layer-8508'><div class="rating">
<ul class="unit-rating">
<li class="current-rating" style="width:69.8426%;">69.8426</li>
<li><a href="#" title="Mauvais" class="r1-unit" onclick="doRate('1', '8508'); return false;">1</a></li>
<li><a href="#" title="Faible" class="r2-unit" onclick="doRate('2', '8508'); return false;">2</a></li>
<li><a href="#" title="Moyen" class="r3-unit" onclick="doRate('3', '8508'); return false;">3</a></li>
<li><a href="#" title="Bon" class="r4-unit" onclick="doRate('4', '8508'); return false;">4</a></li>
<li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '8508'); return false;">5</a></li>
</ul>
</div></div>
</div>
</div>
</div>
</div><div class="shortstory-in">
<div class="shortstory radius-3">
<div class="short-images radius-3">
<a href="films/killing-gunther.html" title="Killing Gunther Streaming VF" class="short-images-link">
<img src="thumbnail/film/2017-12/killing-gunther-4802.jpg" alt="Killing Gunther" title="Killing Gunther Streaming VF" />
</a>
<span class="film-rip"><a href="films/qualite/bdrip.html">Bdrip</a></span>
<span class="film-language"><a href="films/langue/vf.html">VF</a></span>
</div>
<div class="short-content">
<h4 class="short-link"><a href="films/killing-gunther.html" title="Killing Gunther Streaming VF">Killing Gunther</a></h4>
<div class="short-rating">
<div id='ratig-layer-8781'><div class="rating">
<ul class="unit-rating">
<li class="current-rating" style="width:48.9166%;">48.9166</li>
<li><a href="#" title="Mauvais" class="r1-unit" onclick="doRate('1', '8781'); return false;">1</a></li>
<li><a href="#" title="Faible" class="r2-unit" onclick="doRate('2', '8781'); return false;">2</a></li>
<li><a href="#" title="Moyen" class="r3-unit" onclick="doRate('3', '8781'); return false;">3</a></li>
<li><a href="#" title="Bon" class="r4-unit" onclick="doRate('4', '8781'); return false;">4</a></li>
<li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '8781'); return false;">5</a></li>
</ul>
</div></div>
</div>
</div>
</div>
</div><div class="shortstory-in">
<div class="shortstory radius-3">
<div class="short-images radius-3">
<a href="films/la-grande-muraille-hdv6.html" title="La Grande Muraille Streaming VF" class="short-images-link">
<img src="thumbnail/film/2017-01/la-grande-muraille-5008.jpg" alt="La Grande Muraille" title="La Grande Muraille Streaming VF" />
</a>
<span class="film-rip"><a href="films/qualite/bdrip.html">Bdrip</a></span>
<span class="film-language"><a href="films/langue/vf.html">VF</a></span>
</div>
<div class="short-content">
<h4 class="short-link"><a href="films/la-grande-muraille-hdv6.html" title="La Grande Muraille Streaming VF">La Grande Muraille</a></h4>
<div class="short-rating">
<div id='ratig-layer-663'><div class="rating">
<ul class="unit-rating">
<li class="current-rating" style="width:48.0094%;">48.0094</li>
<li><a href="#" title="Mauvais" class="r1-unit" onclick="doRate('1', '663'); return false;">1</a></li>
<li><a href="#" title="Faible" class="r2-unit" onclick="doRate('2', '663'); return false;">2</a></li>
<li><a href="#" title="Moyen" class="r3-unit" onclick="doRate('3', '663'); return false;">3</a></li>
<li><a href="#" title="Bon" class="r4-unit" onclick="doRate('4', '663'); return false;">4</a></li>
<li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '663'); return false;">5</a></li>
</ul>
</div></div>
</div>
</div>
</div>
</div><div class="shortstory-in">
<div class="shortstory radius-3">
<div class="short-images radius-3">
<a href="films/vaiana-la-legende-du-bout-du-monde-0JUbGw.html" title="Vaiana, la légende du bout du monde Streaming VF" class="short-images-link">
<img src="thumbnail/film/2016-12/vaiana-la-legende-du-bout-du-monde-7277.jpg" alt="Vaiana, la légende du bout du monde" title="Vaiana, la légende du bout du monde Streaming VF" />
</a>
<span class="film-rip"><a href="films/qualite/bdrip.html">Bdrip</a></span>
<span class="film-language"><a href="films/langue/vf.html">VF</a></span>
</div>
<div class="short-content">
<h4 class="short-link"><a href="films/vaiana-la-legende-du-bout-du-monde-0JUbGw.html" title="Vaiana, la légende du bout du monde Streaming VF">Vaiana, la légende du bout du monde</a></h4>
<div class="short-rating">
<div id='ratig-layer-581'><div class="rating">
<ul class="unit-rating">
<li class="current-rating" style="width:74.4712%;">74.4712</li>
<li><a href="#" title="Mauvais" class="r1-unit" onclick="doRate('1', '581'); return false;">1</a></li>
<li><a href="#" title="Faible" class="r2-unit" onclick="doRate('2', '581'); return false;">2</a></li>
<li><a href="#" title="Moyen" class="r3-unit" onclick="doRate('3', '581'); return false;">3</a></li>
<li><a href="#" title="Bon" class="r4-unit" onclick="doRate('4', '581'); return false;">4</a></li>
<li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '581'); return false;">5</a></li>
</ul>
</div></div>
</div>
</div>
</div>
</div><div class="shortstory-in">
<div class="shortstory radius-3">
<div class="short-images radius-3">
<a href="films/doctor-strange-zrLh3c.html" title="Doctor Strange  Streaming VF" class="short-images-link">
<img src="thumbnail/film/2016-12/doctor-strange-5176.jpg" alt="Doctor Strange " title="Doctor Strange  Streaming VF" />
</a>
<span class="film-rip"><a href="films/qualite/bdrip.html">Bdrip</a></span>
<span class="film-language"><a href="films/langue/vf.html">VF</a></span>
</div>
<div class="short-content">
<h4 class="short-link"><a href="films/doctor-strange-zrLh3c.html" title="Doctor Strange  Streaming VF">Doctor Strange </a></h4>
<div class="short-rating">
<div id='ratig-layer-404'><div class="rating">
<ul class="unit-rating">
<li class="current-rating" style="width:98.403%;">98.403</li>
<li><a href="#" title="Mauvais" class="r1-unit" onclick="doRate('1', '404'); return false;">1</a></li>
<li><a href="#" title="Faible" class="r2-unit" onclick="doRate('2', '404'); return false;">2</a></li>
<li><a href="#" title="Moyen" class="r3-unit" onclick="doRate('3', '404'); return false;">3</a></li>
<li><a href="#" title="Bon" class="r4-unit" onclick="doRate('4', '404'); return false;">4</a></li>
<li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '404'); return false;">5</a></li>
</ul>
</div></div>
</div>
</div>
</div>
</div><div class="shortstory-in">
<div class="shortstory radius-3">
<div class="short-images radius-3">
<a href="films/deepwater-cC1Ck0.html" title="Deepwater Streaming VF" class="short-images-link">
<img src="thumbnail/film/2016-12/deepwater-5100.jpg" alt="Deepwater" title="Deepwater Streaming VF" />
</a>
<span class="film-rip"><a href="films/qualite/bdrip.html">Bdrip</a></span>
<span class="film-language"><a href="films/langue/vf.html">VF</a></span>
</div>
<div class="short-content">
<h4 class="short-link"><a href="films/deepwater-cC1Ck0.html" title="Deepwater Streaming VF">Deepwater</a></h4>
<div class="short-rating">
<div id='ratig-layer-469'><div class="rating">
<ul class="unit-rating">
<li class="current-rating" style="width:82.948%;">82.948</li>
<li><a href="#" title="Mauvais" class="r1-unit" onclick="doRate('1', '469'); return false;">1</a></li>
<li><a href="#" title="Faible" class="r2-unit" onclick="doRate('2', '469'); return false;">2</a></li>
<li><a href="#" title="Moyen" class="r3-unit" onclick="doRate('3', '469'); return false;">3</a></li>
<li><a href="#" title="Bon" class="r4-unit" onclick="doRate('4', '469'); return false;">4</a></li>
<li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '469'); return false;">5</a></li>
</ul>
</div></div>
</div>
</div>
</div>
</div><div class="shortstory-in">
<div class="shortstory radius-3">
<div class="short-images radius-3">
<a href="films/arq-VMaE36.html" title="Arq Streaming VF" class="short-images-link">
<img src="thumbnail/film/2016-10/arq-7414.jpg" alt="Arq" title="Arq Streaming VF" />
</a>
<span class="film-rip"><a href="films/qualite/dvdrip.html">Dvdrip</a></span>
<span class="film-language"><a href="films/langue/vf.html">VF</a></span>
</div>
<div class="short-content">
<h4 class="short-link"><a href="films/arq-VMaE36.html" title="Arq Streaming VF">Arq</a></h4>
<div class="short-rating">
<div id='ratig-layer-122'><div class="rating">
<ul class="unit-rating">
<li class="current-rating" style="width:81.2704%;">81.2704</li>
<li><a href="#" title="Mauvais" class="r1-unit" onclick="doRate('1', '122'); return false;">1</a></li>
<li><a href="#" title="Faible" class="r2-unit" onclick="doRate('2', '122'); return false;">2</a></li>
<li><a href="#" title="Moyen" class="r3-unit" onclick="doRate('3', '122'); return false;">3</a></li>
<li><a href="#" title="Bon" class="r4-unit" onclick="doRate('4', '122'); return false;">4</a></li>
<li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '122'); return false;">5</a></li>
</ul>
</div></div>
</div>
</div>
</div>
</div></div>
</div>
</div>
</div>
</div>
<!-- *************************************************************************************-->

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
   if(isset($_POST['story']))
   {
   $nom=$_POST['story'];
$query = "SELECT * from video WHERE 
    TITRE           LIKE '%$nom%' 
 OR DUREE           LIKE '%$nom%' 
 OR REALSATEUR      LIKE '%$nom%'  
 OR ACTEUR          LIKE '%$nom%' 
 OR ANNE_PRODUCTION LIKE '%$nom%' 
 OR DESCRIPTION     LIKE '%$nom%' 
 OR DATE_SORTIE     LIKE '%$nom%'
 OR ORGINE_VIDEO    LIKE '%$nom%'
 ";
$result = mysqli_query($conn,$query);
 while($ligne = mysqli_fetch_array($result,MYSQLI_NUM))
{if($ligne[12]=='1')
    
{

                  ?>

<div class="shortstory-in">
<div class="shortstory shortstory-f ">
<div class="short-images ">
<a href="<?php echo "films/films.php?id=".$ligne[0]; ?>"  title=<?php echo $ligne[1]."Streaming VF" ; ?> class="short-images-link">
<img src="<?php  echo $ligne[9] ?>" alt="<?php echo $ligne[1]; ?>" title=<?php echo $ligne[1]."Streaming VF" ; ?>/>
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
else
{
    ?>
<div class="shortstory-in">
<div class="shortstory shortstory-f ">
<div class="short-images ">
<a href="<?php echo "films/series.php?id=".$ligne[0]; ?>"  title=<?php echo $ligne[1]."Streaming VF" ; ?> class="short-images-link">
<img src="<?php  echo $ligne[9] ?>" alt="<?php echo $ligne[1]; ?>" title=<?php echo $ligne[1]."Streaming VF" ; ?>/>
</a>

</div>
<div class="short-content">
<h4 class="short-link"><a href="<?php echo "films/series.php?id=".$ligne[0]; ?>" title=<?php echo $ligne[1]."Streaming VF" ; ?>><?php echo $ligne[1]; ?></a></h4>
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

}}}
?>
<!--   ************************************************************** -->


   <?php
   if(isset($_GET['anne']))
   {
   $nom=$_POST['anne'];
$query = "SELECT * from video WHERE 
    TITRE           LIKE '%$nom%' 
 OR DUREE           LIKE '%$nom%' 
 OR REALSATEUR      LIKE '%$nom%'  
 OR ACTEUR          LIKE '%$nom%' 
 OR ANNE_PRODUCTION LIKE '%$nom%' 
 OR DESCRIPTION     LIKE '%$nom%' 
 OR DATE_SORTIE     LIKE '%$nom%'
 OR ORGINE_VIDEO    LIKE '%$nom%'
 ";
$result = mysqli_query($conn,$query);
 while($ligne = mysqli_fetch_array($result,MYSQLI_NUM))
{if($ligne[12]=='1')
    
{

                  ?>

<div class="shortstory-in">
<div class="shortstory shortstory-f ">
<div class="short-images ">
<a href="<?php echo "films/films.php?id=".$ligne[0]; ?>"  title=<?php echo $ligne[1]."Streaming VF" ; ?> class="short-images-link">
<img src="<?php  echo $ligne[9] ?>" alt="<?php echo $ligne[1]; ?>" title=<?php echo $ligne[1]."Streaming VF" ; ?>/>
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
else
{
    ?>
<div class="shortstory-in">
<div class="shortstory shortstory-f ">
<div class="short-images ">
<a href="<?php echo "films/series.php?id=".$ligne[0]; ?>"  title=<?php echo $ligne[1]."Streaming VF" ; ?> class="short-images-link">
<img src="<?php  echo $ligne[9] ?>" alt="<?php echo $ligne[1]; ?>" title=<?php echo $ligne[1]."Streaming VF" ; ?>/>
</a>

</div>
<div class="short-content">
<h4 class="short-link"><a href="<?php echo "films/series.php?id=".$ligne[0]; ?>" title=<?php echo $ligne[1]."Streaming VF" ; ?>><?php echo $ligne[1]; ?></a></h4>
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

}}}
?>

<!-- ****************************************** -->


   <?php
   if(isset($_GET['anne']))
   {
   $nom=$_POST['anne'];
$query = "SELECT * from video WHERE 
    TITRE           LIKE '%$nom%' 
 OR DUREE           LIKE '%$nom%' 
 OR REALSATEUR      LIKE '%$nom%'  
 OR ACTEUR          LIKE '%$nom%' 
 OR ANNE_PRODUCTION LIKE '%$nom%' 
 OR DESCRIPTION     LIKE '%$nom%' 
 OR DATE_SORTIE     LIKE '%$nom%'
 OR ORGINE_VIDEO    LIKE '%$nom%'
 ";
$result = mysqli_query($conn,$query);
 while($ligne = mysqli_fetch_array($result,MYSQLI_NUM))
{if($ligne[12]=='1')
    
{

                  ?>

<div class="shortstory-in">
<div class="shortstory shortstory-f ">
<div class="short-images ">
<a href="<?php echo "films/films.php?id=".$ligne[0]; ?>"  title=<?php echo $ligne[1]."Streaming VF" ; ?> class="short-images-link">
<img src="<?php  echo $ligne[9] ?>" alt="<?php echo $ligne[1]; ?>" title=<?php echo $ligne[1]."Streaming VF" ; ?>/>
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
else
{
    ?>
<div class="shortstory-in">
<div class="shortstory shortstory-f ">
<div class="short-images ">
<a href="<?php echo "films/series.php?id=".$ligne[0]; ?>"  title=<?php echo $ligne[1]."Streaming VF" ; ?> class="short-images-link">
<img src="<?php  echo $ligne[9] ?>" alt="<?php echo $ligne[1]; ?>" title=<?php echo $ligne[1]."Streaming VF" ; ?>/>
</a>

</div>
<div class="short-content">
<h4 class="short-link"><a href="<?php echo "films/series.php?id=".$ligne[0]; ?>" title=<?php echo $ligne[1]."Streaming VF" ; ?>><?php echo $ligne[1]; ?></a></h4>
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

}}}
?>
 <div class="margin-b20">
     
 </div>

 <div class="fb-page" data-href="https://www.facebook.com/PapStreamCoM-202250520219907" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
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

<!-- Mirrored from www.papstream.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Apr 2018 11:40:58 GMT -->
</html>
<?php
mysqli_close($conn);
?>
