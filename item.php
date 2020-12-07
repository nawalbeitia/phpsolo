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
            <h1>Articles</h1>
            
            <p>
                Bienvenue sur mon super site !<br />
                Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
            </p>
        </div>

        <!-- debut php -->
        <?php

            // array $article1
            $article1 = [
                'nom' => 'bonnet',
                'prix' => '10 euros',
                'photo' => 'https://zupimages.net/up/20/49/uxsr.jpg'];
                echo $article1 ['nom'] ." ". $article1 ['prix'] ." ". $article1 ['photo'] ." ";
                echo '<img src =' . $article1 ['photo'] .' >';
            
            // array $article2
            $article2 = [
                'nom' => 'gants',
                'prix' => '5 euros',
                'photo' => 'https://zupimages.net/up/20/49/5isr.jpg'];
                echo $article2 ['nom'] ." ". $article2 ['prix'] ." ". $article2 ['photo']." ";
                echo '<img src =' . $article2 ['photo'] .' >';

            // array $article3
            $article3 = [
                'nom' => 'bottes',
                'prix' => '20 euros',
                'photo' => 'https://zupimages.net/up/20/49/06jz.jpg'];
                echo $article3 ['nom'] ." ". $article3 ['prix'] ." ". $article3 ['photo']." ";
                echo '<img src =' . $article3 ['photo'] .' >';
                
                $AllArticles = [$article1,$article2,$article3] ;
                

                /*echo '<pre>'; 
                echo print_r($AllArticles); 
                echo '</pre>';*/
        ?>
        <!-- fin php -->
        
        
        <!-- fin corps -->
        
        <!-- debut pied de page -->
        
        <?php include("footer.php"); ?>
        
        <!-- fin pied de page -->
    </body>
</html>