<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style1.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['name'] !== "name"){
                    $users = $_SESSION['name'];
                    // afficher un message
                    echo "Bonjour $users, vous êtes connecté";
                }
            ?>
            
        </div>
    </body>
</html>