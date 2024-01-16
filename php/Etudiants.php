<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- titre de la page et les differents liens css, js et icones -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Présentation des meilleurs joueurs dont le magnifique SEBBAK Mehdi" name="description">

    <title> Meilleurs Joueurs </title>
    <link class="classique" href="../css/style.css" rel="stylesheet">
    <link class="traditionnel" disabled href="../css/style-sombre.css" rel="stylesheet">
    <link class="classique" href="../css/Etudiants.css" rel="stylesheet">
    <link class="traditionnel" disabled href="../css/Etudiants-sombre.css" rel="stylesheet">
    <link href=/ rel="shortcut icon" type="image/png"/>
    <link href="../assets/favicone/favicon-96x96.png" rel="shortcut icon">
    <script defer src="../js/main.js"></script>

</head>
<body>
<?php
session_start();
$etudiant = true;
include "navbar.php";
?>
<main>
    <!--     le tableau avec les meilleurs Joueurs (sauf SEBBAK Mehdi le roi) -->

    <table id="tableauJoueurs">
        <thead>
        <tr>
            <th> Noms</th>
            <th> Age</th>
            <th> ELO</th>
            <th> Nationalité</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Magnus Carlsen</td>
            <td>30</td>
            <td>2847</td>
            <td><img alt="drapeau Norvège" src="../assets/drapeauxPays/no.png"></td>
        </tr>
        <tr>
            <td>Wesley So</td>
            <td>27</td>
            <td>2770</td>
            <td><img alt="drapeau Philipinnes" src="../assets/drapeauxPays/ph.png"></td>
        </tr>
        <tr>
            <td>Fabiano Caruana</td>
            <td>28</td>
            <td>2767</td>
            <td><img alt="drapeau USA" src="../assets/drapeauxPays/us.png"></td>
        </tr>
        <tr>
            <td>Ding Liren</td>
            <td>28</td>
            <td>2760</td>
            <td><img alt="drapeau Chine" src="../assets/drapeauxPays/cn.png"></td>
        </tr>
        <tr>
            <td>Maxime Vachier-Lagrave</td>
            <td>30</td>
            <td>2758</td>
            <td><img alt="Drapeau Arménie" src="../assets/drapeauxPays/fr.png"></td>
        </tr>
        <tr>
            <td>Levon Aronian</td>
            <td>38</td>
            <td>2758</td>
            <td><img alt="Drapeau Arménie" src="../assets/drapeauxPays/am.png"></td>
        </tr>
        <tr>
            <td>Shakhriyar Mamedyarov</td>
            <td>36</td>
            <td>2756</td>
            <td><img alt="Drapeau Azerbaïdjan" src="../assets/drapeauxPays/az.png"></td>
        </tr>
        <tr>
            <td>Teimour Radjabov</td>
            <td>33</td>
            <td>2756</td>
            <td><img alt="Drapeau Azerbaïdjan" src="../assets/drapeauxPays/az.png"></td>
        </tr>
        </tbody>
    </table>
    <p class="introduction"> Nous allons désormais nous concentrer sur les 3 meilleurs joueurs d'Echecs et leur
        histoire</p>

    <!--     les 3 meilleurs joueurs avec leurs photos et leurs descriptions -->

    <section id="les3Meilleurs">
        <video controls id="video">
            <source src="../assets/Snapchat-1422384764.mp4" type="video/mp4">
            <track default kind="subtitles" label="Français" src="../assets/web.vtt" srclang="fr">
            Mehdi Video.
        </video>
        <h2>Les 3 meilleurs joueurs</h2>
        <section id="Mehdi">
            <h3> Mehdi SEBBAK </h3>
            <img alt="photo de Mehdi Sebbak" class="photosMeilleurs" id="md"
                 onclick="ouvrir()" src="../assets/PhotosDesMeilleursJoueurs/happy_mehdi.jpg">
            <button id="btnfermer" onclick="fermer()"><img alt="quitter"
                                                           src="../assets/quitter-le-mode-plein-ecran.png"></button>
            <p> Ce bel homme Français est considéré dans le milieu comme le plus fort du domaine des Echecs, malgré le
                fait qu'il ne figure pas dans le classement élo par modestie, il prouva à de multiples reprises qu'il
                est le meilleur. De plus il est vraiment très aimable.</p>
        </section>
        <section id="Magnus">
            <h4> Magnus CARLSEN </h4>
            <img alt="photo de Magnus Carlsen" class="photosMeilleurs"
                 src="../assets/PhotosDesMeilleursJoueurs/5081.webp">
            <p> Magnus Carlsen est un joueur d'échecs norvégien né le 30 novembre 1990 à Tønsberg. Il a remporté le
                championnat du monde plusieurs fois. Il est considéré comme le meilleur joueur d'échecs derrière le
                grand SEBBAK Mehdi.</p>
        </section>
        <section id="Wesley">
            <h5> Wesley SO</h5>
            <img alt="photo de Wesley So" class="photosMeilleurs"
                 src="../assets/PhotosDesMeilleursJoueurs/Wesley_So,_2015.jpg">
            <p> Wesley So est un joueur d'échecs américano-philippin né le 9 octobre 1993 à Bacoor. Il a obtenu le titre
                de grand maître international en 2008. Il a remporté le championnat des États-Unis en 2017 et 2020 et le
                championnat du monde d'échecs en 2021.
        </section>
    </section>
</main>
</body>

</html>