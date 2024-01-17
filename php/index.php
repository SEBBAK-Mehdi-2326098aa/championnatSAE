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
    <link class="traditionnel" disabled href="../css/index-sombre.css" rel="stylesheet">
    <link href="../assets/favicone/favicon-96x96.png" rel="shortcut icon">
    <script defer src="../js/main.js"></script>

</head>

<body>
<?php
session_start();
$presentation = true;
include "navbar.php";
?>

<h1> BUT Informatique Aix-en-provence</h1>

<main>

    <!-- la section avec les images et les differents paragraphes présentant le jeu -->

    <img src=../img/iutinfo.webp>

    <section id="contenu">
        <h2 class='titrepartie'> Le Diplôme </h2>
        <p>
            • Le BUT Informatique est un diplôme national dont l'objectif est de former des informaticiens
            généralistes.
            Le département informatique d'Aix-en-provence permet de se former en tant que développeur, ainsi qu’à
            l’administration et la
            sécurisation de systèmes informatiques communicants.<br> A la fin de cette formation, les étudiants
            possèdent des compétences à la fois pratiques et théoriques leur permettant d'envisager une insertion dans
            le milieu
            professionnel immédiate ou une poursuite d'études.

        </p>
    </section>



    <div class="cards">
        <a href="#" class="card">
            <div class="card-background" style="background-image: url(https://iut.univ-amu.fr/sites/default/files/media-image/DSC_0010.JPG)"></div>
            <div class="card-content">
                <p>Une journée sport pour découvrir le SCU </p>
                <h3>Journée sport</h3>
            </div>
        </a>

        <a href="#" class="card">
            <div class="card-background" style="background-image: url(data:image/jpeg;base64,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)"></div>
            <div class="card-content">
                <p>Divers évènement sont organisés par l'IUT'</p>
                <h3>LA Nuit de l'Info</h3>
            </div>
        </a>

        <a href="#" class="card">
            <div class="card-background" style="background-image: url(https://assets.nintendo.com/image/upload/f_auto/q_auto/dpr_2.0/c_scale,w_400/ncom/software/switch/70070000003621/e7cfb7d7b2b5b1bfc29862baa12a4f854d58274f974e616a6006785cda7eaa52)"></div>
            <div class="card-content">
                <p>Le BDE organise des évenemnts comme des tournois</p>
                <h3>Tournoi Smash</h3>
            </div>
        </a>

        <a href="#" class="card">
            <div class="card-background" style="background-image: url('../img/chess.png')"></div>
            <div class="card-content">
                <p>Des projets pour apprendre le travail d'équipe </p>
                <h3>Projet Web</h3>
            </div>
        </a>

        <a href="#" class="card">
            <div class="card-background" style="background-image: url(https://www.apprentissage-alternance.fr/fileadmin/Minisites/apprentissage-alternance/apprentissage_et_alternance/ALTERNANCE-INFOGRAPHIE-730-x-210.jpg)"></div>
            <div class="card-content">
                <p>Alternance possible dès la 2ème année</p>
                <h3>Alternance</h3>
            </div>
        </a>

        <a href="#" class="card">
            <div class="card-background" style="background-image: url(https://felgo.com/wp-content/uploads/2014/05/technology-partner2.png)"></div>
            <div class="card-content">
                <p>Découverte de nombreux logiciel</p>
                <h3>Qt Creator</h3>
            </div>
        </a>
    </div>



</main>



<hr>
<footer>

    <a href="formulaire.php" id="formulaire-contact"> Nous Contacter ! </a>


    </section>
</footer>
</body>

</html>
