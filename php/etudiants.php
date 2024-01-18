<?php
$etudiant = true;
include "navbar.php";
?>

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
    <link class="classique" href="../css/etudiants.css" rel="stylesheet">
    <link class="traditionnel" disabled href="../css/etudiant-sombre.css" rel="stylesheet">
    <link href=/ rel="shortcut icon" type="image/png"/>
    <link href="../assets/favicone/favicon-96x96.png" rel="shortcut icon">
    <script defer src="../js/main.js"></script>

</head>

<main>
    <section id="intro">
        <h1>Annonces</h1>
        <p> Cette section permet de voir les actualités du département ! </p>
    </section>

    <div id="annonce">


        <article class="container">
            <a href="#sections"><img src="../assets/logoInformaix_1.png" alt="InformAix"></a>
            <h2>InformAix</h2>
            <p> Dans cette rubrique, les membres du BDE (bureau des étudiants) pourront mettre en ligne des annonces
                afin de prévenir les étudiants des nouveautés tels que les évènements, les ventes,... </p>
        </article>

        <article class="container">
            <a href="#informaix"><img src="../assets/entraide_1610555060918-jpg.png" alt="entraide"></a>
            <h2>Tutorat</h2>
            <p>Les informations concernant les tutorats seront retransmise ici. Les élèves pourront demander un tutorat
                ou encore un tuteur.</p>
        </article>

        <article class="container">
            <a href="#tutorat"><img src="../assets/image_teacher.jpg" alt="Teacher"></a>
            <h2 id="professeur">Annonce Professeur</h2>
            <p> Cette annonce permet aux professeurs de publier des messages destinés aux élèves. En cas d'une absence
                ou d'une date limite d'un rendu de projet, le professeur en question pourra tenir les étudiants au
                courant grâce à cete rubrique. </p>
        </article>

        <article class="container">
            <a href="#professeurs"><img src="../assets/flambeau.jpg" alt="Flambeau"></a>
            <h2 id="3annee">Aide des 3eme année</h2>
            <p> Dans cette rubrique, les étudiants de 3ème année pourront proposer leur appartement ou
                encore leur alternance qu’ils laisseront en partant de l’iut. Les étudiants des autres promotions
                pourront donc reprendre le flambeau de leur aîné. </p>
        </article>
    </div>

</main>

<div id="sections">
    <div id="informaix">

        <h2 class=titresection>INFORM'AIX</h2>
        <p> EVENEMENTS : Le tournoi Smash Bros la semaine prochaine, venez nombreux et <label class="inscription">
                inscrivez
                vous ici </label> <br> <br>
            EVENEMENTS : La nuit de l'info est terminé, retrouvez tout ces excellents souvenirs sur nos <label
                    class=inscription>réseaux sociaux</label> <br> <br>
            INFORMATION : Le stock de nourriture est de nouveau rempli, venez nous rendre visite <br> <br>
            INFORMATION : Les Kinder Bueno sont en réduction de 50% Venez vite avant que ça parte. <br> <br>
            EVENEMENTS : Les éléctions de l'IUT sont terminés, venez voir les <label class=inscription> résulats ici
            </label> !
        </p>

    </div>


    <div id="tutorat">

        <h2 class=titresection>Annonce Tutorat</h2>
        <p>
            RECHERCHER TUTORAT : J'aurais besoin d'un tutorat pour réviser les maths, je suis libre le mardi et
            jeudi soir <br> <br>
            TUTORAT : Un tutorat sur le C++ aura lieu Lundi après les cours en TP I-010 <br> <br>
            TUTORAT : Je ferais un tutorat en communication sur discord, venez nombeux ! <label class=inscription> lien
                vers le tutorat </label> <br> <br>
        </p>
    </div>


    <div id="professeurs">

        <h2 class=titresection>Annonce des Professeurs</h2>
        <p>
            INFORMATION : Monsieur LAKHAL sera indisponible les 2 prochaines semaines <br> <br>
            INFORMATION : La SAE 1.02 est à rendre lundi 12 janvier à 12h, DERNIER DELAIS !!<br><br>
            INFORMATION : Examen de SQL le Vendredi 25 février de 8h à 10h en salle d'examen. <br><br>
            INFORMATION : QCM de maths discrete sur Ametice <br><br>
        </p>

    </div>

    <div id="flambeau">

        <h2 class=titresection>Aide des 3ème année</h2>
        <p> APPARTEMENT : Nous laissons un appartement au 4 rue du Pommier à Aix-en-provence. Collocation de 4-5
            maximums. Si vous êtes intéressé(es), <label class="inscription">
                contactez-nous </label> <br> <br>
            APPARTEMENT : Appartement 2 pièces se libère le 3 août, il se situe dans le centre de Venelles. Pour plus
            d'information, <label class=inscription>cliquez ici</label> <br> <br>
            ALTERNANCE : Une place se libère dans l'entreprise AMAZON, <label class="inscription">
                contactez-moi </label> <br> <br>
            ALTERNANCE : 3 places vont se libérer pour l'alternance dans l'entreprise IPSSI <label class="inscription">
                contactez-les </label><br> <br>
        </p>
    </div>

</div>
<body>
