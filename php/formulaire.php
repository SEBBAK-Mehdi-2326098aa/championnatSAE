<!DOCTYPE html>
<html lang="fr">

<head>

    <?php
    include "navbar.php";
    ?>
    <!-- Balise meta -->
    <meta charset="UTF-8">
    <meta name="description"
          content="Cette page est un formulaire afin de pouvoir nous contacter si l'utilisateur à un message à nous faire passer.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Titre de la page web -->
    <title>Nous contacter</title>

    <!-- Lien vers les pages de style et du favicon -->
    <link rel="stylesheet" href="../css/style.css">
    <link id="css" rel="stylesheet" href="../css/formulaire.css">


    <!-- Lien vers les emojies font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>

<div class="cards">
    <div class="contrainer">
        <div class="carde">
            <div class="card-top">
                <img class="img_contact" src="../img/pic.png" alt="">
            </div>
            <br> <br>
            <div class="card-infos">
                <h2 class="name">Samuele ANNI</h2>
                <h3 class="job">Directeur des études BUT 1</h3>
                <p class="quote">Email</p>
            </div>
            <div class="button">
                <button>Contact</button>
            </div>
        </div>
    </div>




    <div class="contrainer">
        <div class="carde">
            <div class="card-top">
                <img class="img_contact" src="../img/pic.png" alt="">
            </div>
            <br> <br>
            <div class="card-infos">
                <h2 class="name jsp">Christine MAKSSOUD</h2>
                <h3 class="job">Chef du département</h3>
                <p class="quote">Email</p>
            </div>
            <div class="button">
                <button>Contact</button>
            </div>
        </div>
    </div>

</div>

<!-- Formaulaire -->
<div class="container_formulaire">
    <form id="form"
          action="mailto:coline.albano@etu.univ-amu.fr?subject=Impression%20sur%20le%20département%20Informatique"
          method="post" enctype="text/plain">
        <h1>Votre avis</h1>
        <!-- Ligne de séparation -->
        <div class="separation"></div>
        <div class="corps_formulaire">
            <!-- Partie gauche du formulaire -->
            <div class="gauche">
                <div class="groupe">
                    <label>Nom : </label>
                    <input type="text" name="Nom " value=" ">
                    <i class="fa-solid fa-user-secret"></i>
                </div>
                <div class="groupe">
                    <label>Prénom : </label>
                    <input id="prenom" type="text" name="Prenom " value=" ">
                    <i class="fa-solid fa-user-astronaut"></i>
                </div>
                <div class="groupe">
                    <label>Telephone : </label>
                    <input id="tel" type="text" name="Telephone " value=" ">
                    <i class="fa-solid fa-mobile-retro"></i>
                </div>
            </div>
            <i class=""></i>
            <!-- Partie droite du formulaire -->
            <div class="droite">
                <div class="groupe">
                    <label>Message : </label>
                    <textarea name="Votre avis " rows="10" cols="30" placeholder="Votre avis..."></textarea><br>
                </div>
            </div>
        </div>

        <div class="pied_formulaire">
            <button type="submit" value="Envoyer">Envoyez votre message</button>
        </div>
    </form>
</div>
</body>
<footer>

    <?php
    include "footer-amu.php";
    ?>

</footer>
</html>