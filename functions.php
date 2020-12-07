<?php

// fonction sans paramètre qui affiche : nom, prix, image. 

function displayItem1() {
    global $AllArticles;
    echo '<p>'.$AllArticles[0]['nom'].' vaut '.$AllArticles[0]['prix']. ' voici la photo ' .$AllArticles[0]['photo'];
}

function displayItem2() {
    global $AllArticles;
    echo '<p>'.$AllArticles[1]['nom'].' vaut '.$AllArticles[1]['prix']. ' voici la photo ' .$AllArticles[1]['photo'];
}

function displayItem3() {
    global $AllArticles;
    echo '<p>'.$AllArticles[2]['nom'].' vaut '.$AllArticles[2]['prix']. ' voici la photo ' .$AllArticles[2]['photo'];
}

// fonction displayItem() qui a en paramètre le nom, le prix et l’image.

function displayItem($nom, $prix, $photo) {
    
    echo  $nom . $prix . $photo ;
  
}

?>