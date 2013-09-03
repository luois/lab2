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
<HTML>
<HEAD>
    <TITLE>Fichier de test de COOKIE</TITLE>
</HEAD>
<BODY>
<CENTER>
    Cookie manger le:
    <?php

    $date = date("d-m-Y");
    echo "$date";

    ?>
    <P><A HREF="cookie2.php">Lien vers cookie2.php:</A><P>
        <IMG SRC="cookie.gif" border =0">
</CENTER>
</BODY>
</HTML>