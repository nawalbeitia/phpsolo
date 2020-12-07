<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
    <body>
        
        <!--debut en-tête -->

        <?php include("header.php"); ?>
            
        <!--fin en-tête -->

        <!-- debut menu -->
            
        <?php include("menu.php"); ?>
            
        <!-- fin menu -->
    
        <!-- debut corps -->

        <pre>GET : <?php var_dump($_GET); ?></pre><!-- les donnees transiteront par l'URL -->
        <hr>
        <pre>POST : <?php var_dump($_POST); ?></pre><!-- methode qui permet d'envoyer autant de donnees que l'on veut -->


        <form action= "displayItem.php" method="post"><!-- on crée l'enveloppe du formulaire -->
            <p>Veuillez taper le nom de l'article :</p>
                <p>
                    <input type="text" name="article" />
                    <input type="submit" value="Valider" />
                </p>
            </p>  
        </form>

        <!-- fin  corps -->

        <!-- debut footer -->
    
        <?php include("footer.php"); ?>

        <!-- fin du footer -->
    </body>
</html>