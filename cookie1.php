<?php
$pseudo = $_REQUEST["pseudo"];
$nom = $_REQUEST["nom"];
$prénom = $_REQUEST["prénom"];
$sexe = $_REQUEST["sexe"];
$nomcookie =$_REQUEST["pseudo"];
setcookie("Pseudo", $nomcookie, time()+3600);
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<html>
<head><title>Voici la fonctionnalité cookie</title></head>
<BODY>
<div style="text-align: center;">
    Cookie créé le :
    <?php
    $date = date("d-m-Y");
    echo "$date";
    if($_COOKIE['pseudo']&& $pseudo!="" && $nom !=""&& $prénom !=""&& $sexe!="")
    {
        echo '<br>Bienvenue '. $sexe.' '.$prénom.' '.$nom;
    }
    else
    {
        echo 'le cookie nesiste pas';
        header("refresh: 3; url=vérification.html");
    }
    ?>
</div>
</BODY>
</HTML>

