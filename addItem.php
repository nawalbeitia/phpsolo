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

        <?php
            var_dump ($_POST);

            $testNom = false;
            $testPrix = false;
            $testPhoto = false;
            $afficheTextNom = null;
            $afficheTextPrix = null;
            $afficheTextPhoto = null;

            // Tester si le champs est valide
            if(!isset($_POST['nom']) || $_POST ['nom'] == '') {
                $afficheTextNom = "Vous n'avez pas saisi le nom";
            }else {
                $testNom = true; 
            }
            
            // Tester si le champs est valide
            if(!isset($_POST['prix']) || $_POST ['prix'] == '') {
                $afficheTextPrix = "Vous n'avez pas saisi le prix";
            }else {
                if( is_int( $_POST ['prix'] ) && $_POST ['prix'] > 0 ) {
                    $testPrix = true;   
                }
                else {
                    $afficheTextPrix = "Mettre un nombre entier positif";
                } 
            }
            // Tester si le champs est valide
            if(!isset($_POST['photo']) || $_POST ['photo'] == '') {
                $afficheTextPhoto = "Vous n'avez pas saisi la photo";
            }else {
                $testPhoto = true; 
            }
            // Si tout les champs sont vrais
            if ($testNom == true && $testPhoto == true && $testPrix == true) {
                header('Location: http://localhost/testtuto/essaiphpsolo/displayItem.php?nom=' . $_POST['nom'] . '&prix=' .$_POST['prix'] . '&photo=' .$_POST['photo']);
                exit;
            }

        ?>
        
        <form action= "addItem.php" method="post"><!-- on crée l'enveloppe du formulaire -->
            <p>Veuillez taper le nom de l'article :</p>
                <p>
                    <label >Nom:</label>
                    <input type="text" name="nom" />
                    <?= $afficheTextNom 
                    ?>
                </p>
                
                <p>
                    <label for="prix"> Prix :</label>
                    <input type="text" name="prix" id="prix"/>
                    <?= $afficheTextPrix 
                    ?>
                </p>
                <p>
                    <label for="photo">Url photo :</label>
                    <input type="photo" name="photo" id="photo"/>
                    <?= $afficheTextPhoto 
                    ?>
                </p>
            
            <input type="submit" value="Valider" /> 
        </form>

        <!-- fin  corps -->

        <!-- debut footer -->
    
        <?php include("footer.php"); ?>

        <!-- fin du footer -->
    </body>
</html>