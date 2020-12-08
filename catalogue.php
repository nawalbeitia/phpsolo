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
        
        <div id="corps">
            <h1>Mon super site</h1>
            
            <p>
                Bienvenue sur mon super site !<br />
                Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
            </p>
        </div>

        <!-- debut php -->
        <?php 
            // array contenant tout les articles 
            $AllArticles = [ 
                [
                    'nom'=> 'bonnet',
                    'prix' => '10 euros',
                    'photo' => 'https://zupimages.net/up/20/49/uxsr.jpg'
                ],
                

                [
                    'nom'=> 'gant', 
                    'prix' => '5 euros',
                    'photo' => 'https://zupimages.net/up/20/49/5isr.jpg',
                ],
                
                [
                    'nom'=> 'bottes',
                    'prix'=> '20 euros',  
                    'photo' => 'https://zupimages.net/up/20/49/06jz.jpg'
                ],
            ];

            /* Appel des fonctions
                include "functions.php";
                displayItem1();
                displayItem2();
                displayItem3();
                displayItem('bonnet', 10, 'https://zupimages.net/up/20/49/uxsr.jpg'); 
            */

            // boucle pour afficher les articles du catalogue
                include("functions.php");
  
            foreach ($AllArticles as $article){
                echo '<pre>';
                displayItem ($article['nom'], $article['prix'],$article ['photo']);
                //echo '<p>'.$article['nom'].' vaut '.$article['prix']. ' voici la photo ' .$article ['photo'];
                echo '</pre>';
                echo '<img src =' . $article ['photo'] .' >';
            }




        ?>
        <!-- fin php -->
        
        
        <!-- fin  corps -->
    
        <!-- debut footer -->
    
        <?php include("footer.php"); ?>

        <!-- fin du footer -->
    
    </body>
</html>