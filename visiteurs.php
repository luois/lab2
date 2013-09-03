<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<body>
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 13-09-03
 * Time: 09:13
 * To change this template use File | Settings | File Templates.
 */

$fp = fopen("pays.txt","r");
while (!feof($fp))
    {
        $page = fgets($fp, 4096); //lecture du contenue de la ligne
        $affiche .= $page;
        $affiche .= '</br>';
    }
echo 'Voici les pays :</br>'.$affiche;
fclose($fp);
?>

</body>