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


<?php
session_start();
$departement = true;
include "navbar.php";
?>


<main class="tuto">
    <video controls="controls">
        <source src="../assets/Apprends%20à%20jouer%20aux%20échecs%20en%20moins%20de%2010%20minutes.mp4"
                type="video/mp4">
        <a href="https://www.youtube.com/embed/b3_p6pb8YcU?si=12ekI_xKKbD2ngXw">Video Youtube</a>
    </video>
</main>

<section class="explications">
    <nav class="sommaire">
        <h3 id="t2">Les matières en 1ère année</h3>
        <p id="petit-texte">En première année l'enseignement est général avec des matières mélangeant la partie
            informatique, et une partie plus générale. L'informatique compte pour ...% et la partie générale pour
            ...%.</p>
    </nav>
    <h4 id="1"> Les Spécialités Informatiques </h4>
    <p>
        <string>Matières informatiques</string>
        <br>
        <br>
        -Programmation et programmation orientée objet<br>
        -Programmation web côté serveur<br>
        -Architecture des ordinateurs<br>
        -Systèmes d'exploitation et réseaux<br>
        -Programmation répartie<br>
        -Programmation et administration bases de données<br>
        -Analyse et conception des systèmes d'information<br>
        -Interfaces hommes-machine<br>
        -Conception de documents et interfaces numériques<br>
        -Conception et développement d'applications mobiles<br>
        -Gestion de projet informatique<br>
        -Méthodologie de la production d'applications<br>
        -Informatique embarquée et temps réel<br>
        <br>
        <br>
        <string> Langages/Logiciels utilisés</string>
        <br>
        <br>
        -Langages de programmation : C, C++, Java, PHP, JavaScript, SQL, PL/SQL, HTML 5, CSS 3...<br>
        -Systèmes d'exploitation : Linux, Windows, Android (option)<br>
        -Bases de données : Oracle, MySQL<br>
        -Analyse et conception : UML<br>
        -Environnements de développement : NetBeans, Eclipse, VisuualStudio, WampServer , XMLSpy (option), ...<br>
        -Logiciels - Outils : MS-Projet, PowerAMC, Visual Paradigm, SQL Developer, Maple, R, VirtualBox, Dreamweaver
        (option) , Notepad++, Filezilla, ERP Dolibarr, ...<br>
        -Bureautique : Word, PowerPoint, Excel, Access, Publisher, Freemind, OpenOffice,<br>

    </p>
    <h4 id="2">Les Enseignements généraux </h4>
    <p>
        -Les mathématiques : mathématiques discrètes, algèbre linéaire, graphes et langages, analyse et méthodes
        numériques, probabilités et statistiques.<br>
        <br>
        -La communication : résumé, compte-rendu, présentation orale, prise de parole en public, jeu de rôle,
        explication, dynamique des groupes, rédaction d'un dossier de candidature avec lettres et CV et entretiens
        de recrutement.<br>
        <br>
        -L'anglais général et technique : utilisation de tutoriels techniques, articles scientifiques ou généraux,
        travail à partir de supports multimédia variés, réunions, conversations téléphoniques, simulations de
        situations professionnelles et compte-rendu <br>
        <br>
        -Et la connaissance du monde de l'entreprise et du travail : environnement économique, fonctionnements des
        organisations, environnement comptable, financier, juridique et social, droit des technologies de
        l'information et de la communication et gestion des systèmes d'information <br>
        <br>
    </p>
</section>


<section class="explications">
    <nav class="sommaire">
        <h3 id="t2">Parcours de 2ème et 3ème année</h3>
        <p id="petit-texte">Le département informatique d'Aix-en-Provence propose deux parcours accessible dès la
            2ème année
        </p>
        <ol class="liste">
            <li><a href="#3">Parcours A</a></li>
            <li><a href="#4">Parcours B</a></li>
        </ol>
    </nav>
    <h4 id="3">Parcours A. Réalisation d’applications : conception, développement et validation</h4>
    <p>
        Dans ce parcours, les étudiants se veront confrontés au cycle de vie du logiciel : de
        l’expression du besoin du client, à la conception ou encore à la validation en passant par la maintenance de
        l’application. <br> Le parcours A forme les étudiants aux métiers de
        <strong>concepteur-développeur</strong> (mobile, web, Internet des objets, jeux vidéo...).
    </p>
    <h4 id="4">Parcours B. Déploiement d’applications communicantes et sécurisées </h4>
    <p>
        Dans ce parcours, les étudiants se concentreront sur la mise en place et à la sécurité des systèmes
        d'information et des
        applications. <br>
        Grâce à ce parcours, les étudiants seront préparés aux <strong>métiers d'administrateur
            système/réseaux ou applicatifs, cybersécurité, DevOps, intégrateurs d'application, ...</strong>
    </p>
</section>

<script src="../js/main.js"></script>

<!--footer qui permet de revenir en haut de la page en cliquant sur l'icone-->
<footer>    <a href="formulaire.php" id="formulaire-contact"> Nous Contacter ! </a>
</footer>

</html>