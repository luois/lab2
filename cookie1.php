<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<head><h2>Voici la fonctionnalité cookie</h2></head>
<boby>
    <?php
    if(!isset($_COOKIE['ybet']))
    {
        setcookie('ybet','site',time()+3600);
        Print ("Première visite <br>");
    }else{
        Print ("Vous avez déjà visité la page<br>");

        echo $_COOKIE['ybet']."<br>";
    }
    ?>
    <?php
    if (ISSET($_POST['login'])
    {
        // boucle qui détecte la demande de connexion, vérifie les données de l'utilisateur et crée le cookie si les codes sont corrects
    } ?>

    <head>
        <!-- contenu du header -->
    </head>

    <body>
    // le contenu affiché

    <form>
        // le formulaire de connexion (login)
    </form>

    // suite du contenu affiché

    </body>

</boby>

