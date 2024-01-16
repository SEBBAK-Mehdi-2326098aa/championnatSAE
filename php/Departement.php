<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Apprendre à jouer à ce magnifique jeu." name="description">

    <title>Apprendre</title>
    <link class="classique" href="../css/style.css" rel="stylesheet">
    <link class="traditionnel" disabled href="../css/style-sombre.css" rel="stylesheet">
    <link class="classique" href="../css/departement.css" rel="stylesheet">
    <link class="traditionnel" disabled href="../css/apprendre-traditionnel.css" rel="stylesheet">
    <link href=/ rel="shortcut icon" type="image/png"/>
    <link href="../assets/favicone/favicon-96x96.png" rel="shortcut icon">
    <script defer src="../js/main.js"></script>


</head>
<body>
<!-- barre de navigation responsive accompagné du logo et du titre-->

<?php
session_start();
$departement = true;
include "navbar.php";
?>
<!-- main qui contient les gif et les explications concernants les apprentissags-->

<main class="tuto">
    <video controls="controls">
        <source src="../assets/Apprends%20à%20jouer%20aux%20échecs%20en%20moins%20de%2010%20minutes.mp4"
                type="video/mp4">
        <a href="https://www.youtube.com/embed/b3_p6pb8YcU?si=12ekI_xKKbD2ngXw">Video Youtube</a>
    </video>
</main>
<section class="explications">
    <nav class="sommaire">
        <h3 id="t2">Apprendre à Jouer aux Échecs | Règles + 4 Principes</h3>
        <p id="petit-texte">Il n'est jamais trop tard pour apprendre !</p>
        <ol class="liste">
            <li><a href="#1">Préparer l’échiquier</a></li>
            <li><a href="#2">Le déplacement des pièces</a></li>
            <li><a href="#3"> Les règles spéciales des échecs</a></li>
            <li><a href="#4">Qui joue en premier aux échecs</a></li>
        </ol>
    </nav>
    <h4 id="1">Le BDE </h4>
    <p>
        Au début de la partie, l'échiquier est placé de manière à ce qu'une case blanche se trouve dans le coin
        inférieur droit du camp de chaque joueur.
        Les pièces sont ensuite disposées de la même manière à chaque début de partie. La deuxième rangée (ou ligne) est
        occupée par les pions. Les tours occupent les coins, puis les cavaliers viennent à leur côté, suivis des fous,
        de la dame et enfin du roi, la dame devant se trouver sur une case de sa couleur (dame blanche sur case blanche,
        dame noire sur case noire).
        <img alt="debut" class="images" src="../assets/imagesapprendre/etape1.gif">
    </p>
    <h4 id="2">Étape 2. Le déplacement des pièces </h4>

    <h4 id="3">Étape 3. Les règles spéciales des échecs</h4>
    <p>
        Il existe quelques règles spéciales aux échecs qui peuvent sembler illogiques au premier abord. Elles ont été
        créées pour rendre le jeu plus amusant et intéressant.
        <br><strong>Promouvoir un pion</strong>
        Le pion dispose d’un autre coup spécial. Si un pion atteint l’autre bout de l’échiquier, il peut devenir
        n’importe quelle autre pièce, à l’exception d’un roi.
        <img alt="Promotion du pion" class="images" src="../assets/imagesapprendre/promouvoir.jpeg">
        Ceci s’appelle la promotion. Une idée fausse répandue est qu’un pion promu ne peut être remplacé que par une
        pièce qui a été capturée : ce n’est PAS vrai. Un pion est habituellement promu en dame. Seuls les pions peuvent
        être promus.
        <br><strong>Prendre « en passant »</strong>
        La dernière règle concernant les pions s’appelle « la prise en passant ». Lorsqu’un pion avance de deux cases à
        son premier coup, et ce faisant se retrouve à côté d’un pion de l’adversaire (qui ne peut donc plus le capturer
        de manière classique), cet autre pion a la possibilité de capturer le premier « en passant », comme s’il ne
        s’était déplacé que d’une case.
        Ce coup spécial doit être joué immédiatement, dans le tour qui suit le départ du pion pris. Voyez l’exemple
        ci-dessous pour mieux comprendre cette règle étrange, mais importante.
        <img alt="Échecs en passant" class="special" src="../assets/imagesapprendre/prisepassant.jpeg">
        <br><strong>Le Roque</strong>
        Une autre règle spéciale des échecs s’appelle le roque. Il vous permet de faire d’une pierre deux coups : mettre
        votre roi à l’abri (dans la mesure du possible) et faire entrer une tour dans le jeu en la sortant de son coin.
        Le joueur déplace son roi latéralement de deux cases, puis pose la tour sur la case située immédiatement de
        l’autre côté de celui-ci. (Regardez l’exemple ci-dessous.) Pour pouvoir roquer, les conditions suivantes doivent
        toutefois être remplies :

        il doit s’agir du premier déplacement du roi
        il doit s’agir du premier coup de la tour concernée
        pour roquer, aucune pièce ne doit se trouver entre le roi et la tour
        le roi ne peut pas se placer en échec ni traverser une ligne d'échec
        En roquant avec la tour la plus proche du roi, vous effectuez un « petit roque ». Si vous utilisez la tour la
        plus éloignée, en faisant traverser au roi la case de départ de la dame, cela s’appelle un « grand roque ».
        Quelle que soit la direction du roque, le roi se déplace toujours de deux cases.
        <img alt="Comment roquer aux échecs" class="images" src="../assets/imagesapprendre/roque.gif">
    </p>
    <h4 id="4"> Étape 4. Qui joue en premier aux échecs</h4>
    <p>
        Le joueur qui dispose des pièces blanches joue toujours en premier. Elles sont donc en général attribuées au
        hasard, souvent à pile ou face ou en demandant à l’un des joueurs de deviner la couleur du pion caché dans la
        main de l’autre. Les blancs jouent alors un coup, puis les noirs, puis les blancs à nouveau, et ainsi de suite
        jusqu’à la fin de la partie. Avoir le trait au début du jeu constitue un petit avantage, le camp des pièces
        blanches ayant l’opportunité d’attaquer plus vite.
    </p>
    <h4> Entraînez-vous !</h4>
    <p>La meilleure chose que vous puissiez faire pour vous améliorer aux échecs est de jouer beaucoup de parties ! Que
        ce soit à la maison, avec vos amis ou votre famille, ou bien en ligne, il est important de jouer souvent.
        Aujourd’hui, c’est facile de trouver des parties en ligne !
    </p>
</section>
<script src="../js/main.js"></script>

<!--footer qui permet de revenir en haut de la page en cliquant sur l'icone-->
<footer><a href="Departement.html"><img alt="stickers-great" class="stickers"
                                        src="../assets/imagesapprendre/customer-service.png"></a></footer>
</body>
</html>