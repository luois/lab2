<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<head><h2>Voici la fonctionnalité cookie</h2></head>
<boby>
    <?php
        if (isset ($_POST["connexion"]))
        {
            $nom=ADDSLASHES($_POST['nom']);
            $password=$_POST['mot_passe'];
            setcookie ('ybet','connexion',time()+3600);
// on crée le cookie en cas de connexion
        }
    } ?>

    <head>
        <!-- contenu du header -->
        if(!isset($_COOKIE['ybet']))
        {
        setcookie('ybet','site',time()+3600);
        Print ("Première visite <br>");
        }else{
        Print ("Vous avez déjà visité la page<br>");

        echo $_COOKIE['ybet']."<br>";
        }
    </head>

    <body>
    // le contenu affiché

    <form>
        // le formulaire de connexion (login)
    </form>

    // suite du contenu affiché

    </body>

</boby>

