<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Création de la table </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php
    require ("connexion_bdd.php"); // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase("localhost","root","","jarditou"); // Appel de la fonction de connexion
    ?>
    


</head>
<body>
<h1>Création de la table Users</h1>  
        <?php
           
            
            try{
                $dbco = connexionBase("localhost","root","","jarditou");
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE TABLE Users(
                        users_Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        users_Name VARCHAR(30) NOT NULL,
                        users_firstname VARCHAR(30) NOT NULL,
                        users_mail_Address VARCHAR(70) NOT NULL,
                        users_Login VARCHAR(30) NOT NULL,
                        users_password INT UNSIGNED NOT NULL,
                        users_Registration_date date,
                        users_last_Connection date)"
                        ;
                        
                
                $dbco->exec($sql);
                echo 'La table a bien crée !';
            }
            
            catch(PDOException $e){
              echo "Echec de création de table : " . $e->getMessage();
            }
        ?>






        
    <!--fichiers Javascript nécessaires à Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>


















    
    <!--fichiers Javascript nécessaires à Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
