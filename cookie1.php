/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 13-09-03
 * Time: 15:03
 * To change this template use File | Settings | File Templates.
 */
<?php
if(!isset($_COOKIE['ybet']))
{
    Setcookie('ybet','site');
    Print ("Première visite <br>");
}else{
    Print ("Vous avez déjà visité la page<br>");

    echo $_COOKIE['ybet']."<br>";
}
?>

<h1>salut cookie page</h1>