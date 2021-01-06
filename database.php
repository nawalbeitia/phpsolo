<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Bases de données MySQL : : une bibliothèque de fonctions</h1>  
        <?php
            $servername = 'localhost';
            $username = 'nawal';
            $password = 'ZacMailen';
            $dbname = 'eshopbd';
            
            //On établit la connexion
           // $conn = new PDO("mysql:host=$servername;dbname=eshopbd", $username, $password);
             
           //On essaie de se connecter
             try{
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo '<p>Connexion réussie</p>';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }

            /*Test de la variable */
            $reponse = $conn->query('SELECT * FROM products');


            // On affiche chaque entrée une à une
            while ($products =$reponse->fetch())
            {

                echo $products['name'] .'</br>';
                
            }

          

             /*On ecrit une fonction */

            $req = $conn->prepare('SELECT name FROM products');
            $req->execute(array($_GET['possesseur']));
        
        ?>
    </body>
</html>