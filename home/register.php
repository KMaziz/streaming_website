<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if(isset($_POST['submit']))
{
  
$nom=htmlentities(trim($_POST['nom']));
$prenom=htmlentities(trim($_POST['prenom']));
$mail=htmlentities(trim($_POST['mail']));
$password=md5(htmlentities(trim($_POST['password'])));
$conpassword=md5(htmlentities(trim($_POST['conpassword'])));
if($nom&&$prenom&&$mail&&$password&&$conpassword)
    {
        if($password == $conpassword)
      { 

$sql="INSERT INTO utilisateur VALUES('','1','$nom','$prenom','$mail','$password')";
    if(mysqli_query($conn,$sql))
      {echo "new creat";
      }
    else
      echo" eror";
     }
  else
    echo " les deux password doivent étre identique" ;
    }
    else
    echo " saisir tous les champs";
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

<div class="responsive-ad"><script type="text/javascript" src="../adtag.cc/_tags/jstagsf7b8.html?s=fr/papstream/72890_home"></script></div><br /> <div id="mainbar" class="container margin-b40">
<div class="row">
<div class="col-md-9 col-xs-12">
<div class="row">
<div class="speedbar">
<span id="dle-speedbar"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.html" itemprop="url"><span itemprop="title">Papstream</span></a></span> » Connexion Membre</span>
</div>
<div id="dle-content">
<form method="post" name="registration" onsubmit="if (!check_reg_daten()) {return false;};" id="registration" action="">
<div id="page-input">
<h1 class="h-page">
Enregistrement d'un nouvel utilisateur
</h1>
<div class="blockquote">
<p><b>Bonjour, chers visiteurs!</b><br><br>
Inscrivez sur notre site vous permettra d'être un participant à part entière en elle. Vous pouvez ajouter des nouvelles sur le site, laisser des commentaires, voir caché texte et plus encore. En cas de problèmes avec l'enregistrement, s'il vous plaît contactez-
à <a href="contact.html">l'administrateur</a> du site.</p>
</div>
<div class="block-input">
<div class="igroup">
<span class="igroup-span"><i class="fa fa-user"></i></span>
<input type="text" class="igroup-input" name="nom" id="nom" placeholder="First name">
</div>
<div class="igroup">
<span class="igroup-span"><i class="fa fa-user"></i></span>
<input type="text" class="igroup-input" name="prenom" id="prenom" placeholder="Last name">

</div>
<div id="result-registration"></div>
<div class="igroup">
<span class="igroup-span"><i class="fa fa-key"></i></span>
<input type="password" name="password" class="igroup-input" placeholder="Mot de passe">
</div>
<div class="igroup">
<span class="igroup-span"><i class="fa fa-key"></i></span>
<input type="password" name="conpassword" class="igroup-input" placeholder="Répéter le mot de passe">
</div>
<div class="igroup">
<span class="igroup-span"><i class="fa fa-at"></i></span>
<input type="text" name="mail" class="igroup-input" placeholder="Votre E-Mail">
</div>
<input type="checkbox" value="1" name="agree" checked="" style="    display: none;">
<div class="fieldsubmit igroup">
<button name="submit" class="btn" type="submit">Envoyer</button>
</div>
</div>
</div>
<input name="submit" type="hidden" id="submit_reg" value="submit_reg">
<input name="submit" type="hidden" id="do" value="register">
</form>
</div>
<script type="text/javascript">
        register.init();
      </script>
<script language="javascript" type="text/javascript">
<!--
function check_reg_daten () {

    if(document.forms.registration.name.value == '') {

        DLEalert('Nom d'utilisateur ne peut pas être vide!', dle_info);return false;

    }

    if(document.forms.registration.password1.value.length < 6) {

        DLEalert('Le mot de passe doit être d'au moins 6 caractères!', dle_info);return false;

    }

    if(document.forms.registration.password1.value != document.forms.registration.password2.value) {

        DLEalert('les mot de passe doivent être identiques!', dle_info);return false;

    }

    if(document.forms.registration.email.value == '') {

        DLEalert('Adresse électronique non valide!', dle_info);return false;

    }

return true;

};
//-->
</script>

          <a class="igroup-span" href="login.php">Login Page</a>

<div class="clearfix"></div>
</div>
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

<!-- Mirrored from www.papstream.net/films.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Apr 2018 11:41:42 GMT -->
</html>
<?php
mysqli_close($conn);
?>