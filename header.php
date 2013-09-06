/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 13-09-03
 * Time: 12:58
 * To change this template use File | Settings | File Templates.
 */
<?php
$nomcookie=$_REQUEST["nom"];
setcookie("Monster",$nomcookie,time()+(40)); //365*24*3600  //= 1 an
?>


/*** Module cookie
<HTML>
<HEAD>
    <TITLE>Fichier de test</TITLE>
</HEAD>
<BODY>
<CENTER>
    <?php
    if ($_SESSION['equipe'] )//== "Vive les Steelers!!!")
    {
        echo "Affichage de la variable session: ";
        echo $_SESSION['equipe'];
        echo "<BR><A HREF='ouverturesession.php.php'>Fermer la session</A><BR>";
    }
    else
    {
        echo "Variable session inexistante!!!";
    }
    ?>
    <BR>
    <A HREF="ouverturesession.php.php">...Page precedante</A>

    <form method="post" action="cookie1.php">
        <p>Donnez un nom au cookie "Monster":</p>
        nom :
        <input type="text" name="nom" size="40">
        </p>
        <input type="submit" name="Submit" value="R-envoyer">
    </form>
</CENTER>
</BODY>
</HTML>