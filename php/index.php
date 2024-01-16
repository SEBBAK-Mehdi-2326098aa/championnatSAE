<!DOCTYPE html>
<html lang="fr">
<!-- titre de la page et les differents liens css, js et icones -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Présentation du jeu des Echecs et de son histoire !" name="description">
    <title> IUT Informatique Aix </title>
    <link class="classique" href="../css/style.css" rel="stylesheet">
    <link class="traditionnel" disabled href="../css/style-sombre.css" rel="stylesheet">
    <link class="classique" href="../css/index.css" rel="stylesheet">
    <link class="traditionnel" disabled href="../css/index-traditionnel.css" rel="stylesheet">
    <link href="../assets/favicone/favicon-96x96.png" rel="shortcut icon">
    <script defer src="../js/main.js"></script>

</head>

<body>
<?php
session_start();
$presentation = true;
include "navbar.php";

if (isset($_SESSION["logIn"])){
    echo '
<h1> IUT Aix-en-Provence </h1>
    
<main>

    <!-- la section avec les images et les differents paragraphes présentant le jeu -->

    <section id="description">

        <h2>Introduction</h2>
        <p class="introduction">

            <img alt="Echiquier avec des pièces vertes et blanches dessus" class=" image1"
                 height="400"
                 src="https://www.ingenierie84.fr/uploads/thumbnails/uploads/Image/dsc_0054_1920x960.jpg">


    </section>

    <section id="contenu">
        <h3 class="titrepartie">Histoire</h3>
        
        </p>
    </section>

    <section id="Competition">
        <h4 class="titrepartie">Compétition</h4>
        
        </p>
    </section>
    <section>
        <h4 class="titrepartie">Les règles du jeu</h4>
        <p>
            

        </p>
    </section>


</main>

';}
else {

    echo "DORIAN EST PAS CONTENT CONNECTE TOI";
}

?>

<hr>
<footer>
    <!--     le footer avec les differents liens vers les reseaux sociaux, les liens ne sont pas réelements reliés vers no pages parce que Mehdi est timide-->
    <section id="reseaux">
        <h5>Nos Réseaux</h5>
        <a href="https://www.facebook.com/">
            <img alt="L'image ne charge pas"
                 src="../assets/tic-tac.png">
        </a>
        <a href="https://twitter.com/">
            <img alt="L'image ne charge pas"
                 src="../assets/twitter.png">
        </a>
        <a href="https://www.instagram.com/">
            <img alt="L'image ne charge pas"
                 src="../assets/instagram.png">
        </a>

    </section>
</footer>
</body>

</html>
