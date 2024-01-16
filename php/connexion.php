
<?php
session_start();
include "db.php";

if (isset($_POST["deconnexion"])) {
    session_destroy();
    $_SESSION = array();

}

$query = $db->prepare("insert into utilisateur (mail, password) values (:mail , :mdp)");
if (isset($_POST ["enregistrer"])) {

    $verif = $db->prepare("select * from utilisateur where mail = :mail");
    $verif->execute(["mail" => $_POST ["email"]]);

    if ($verif->rowCount() == 0) {

        $query->execute([
            "mail" => $_POST ["email"],
            "mdp" => $_POST ["mot_de_passe"]
        ]);
    }

}

if (isset($_POST ["enregistrer-verif"])) {

    $verif = $db->prepare("select * from utilisateur where mail = :mail");
    $verif->execute(["mail" => $_POST ["email-verif"]]);

    if ($verif->rowCount() == 1) {
        $donnees = $verif->fetch();
        if ($_POST ["mot_de_passe-verif"] == $donnees["password"]) {
            echo "BIENVENUE VOUS ETES CONNECTE" ;
            $_SESSION ["logIn"] = true;

        } else {
            echo "Mauvais mot de passe";
        }
    }
    else {
            echo "Mauvais mail" ;
        }




}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Contactez les créateurs de ce magnifique site." name="description">
    <!--     titre de la page et les differents liens css, js et icones-->
    <title>Contacts</title>
    <link class="classique" href="../css/style.css" rel="stylesheet">
    <link class="traditionnel" disabled href="../css/style-sombre.css" rel="stylesheet">
    <link class="classique" href="../css/connexion.css" rel="stylesheet">
    <link class="traditionnel" disabled href="../css/connexion-sombre.css" rel="stylesheet">
    <link href=/ rel="shortcut icon" type="image/png"/>
    <link href="../assets/favicone/favicon-96x96.png" rel="shortcut icon">
    <script defer src="../js/main.js"></script>

</head>
<body>

<?php

if (isset($_POST["logIN"])){
    $connexion = true;
}
include "navbar.php";
?>


<img alt="logo Aix en provence" class="logo" src=../assets/logo_iut.png>

<?php
if (!isset($_SESSION["logIn"])) {
    echo ' 
<!--     le formulaire de contact avec les differents champs a remplir et le bouton envoyer-->
<h2>Inscription !</h2>
<form action="connexion.php" class="contact" method="post">
    <h3>Inscription !</h3>
    <label class="label" for="email">E-mail</label><br>
    <input class="entrer" id="email" name="email" placeholder="votremail@gmail.com" type="email"><br>
    <label class="label" for="sujet">Mot de passe</label><br>
    <input class="entrer" id="sujet" name="mot_de_passe" placeholder="Mot de passe " type="password"><br>
    <input type="submit" id="envoyer" name="enregistrer" value="Envoyer">

</form>
';
}
  else {
        echo '
        <form action="connexion.php" method="post">
            <input type="submit" name="deconnexion" value="Se déconnecter">
        </form>
    ';
    }

?>
<form action="connexion.php" class="contact" method="post">
    <h4> Connexion!</h4>
    <label class="label" for="email">E-mail</label><br>
    <input class="entrer" id="email" name="email-verif" placeholder="votremail@gmail.com" type="email"><br>
    <label class="label" for="sujet">Mot de passe</label><br>
    <input class="entrer" id="sujet" name="mot_de_passe-verif" placeholder="mot de passe" type="password"><br>
    <input type="submit" id="envoyer" name="enregistrer-verif" value="Envoyer">
</form>
<section class="plus">
    <ul>
        <li>FAQ:<a href="https://assistance.chess.com/">Pour plus de curiosité</a></li>
        <li><a href="">A propos de nous</a></li>
        <li>
            <a href="https://www.amazon.fr/s?k=apprendre+echecs+debutant&adgrpid=1358997397537450&hvadid=84937795864812&hvbmt=be&hvdev=c&hvlocphy=126215&hvnetw=o&hvqmt=e&hvtargid=kwd-84937916741115%3Aloc-66&hydadcr=7679_2271176&tag=hydfrmsn-21&ref=pd_sl_1vrkydbapb_e">Quelque
                guides intéressant</a></li>
        <li>Questions ? : <a href="https://www.chess.com/fr/blog/Skaki72/les-problemes-pourquoi-et-comment">Ce qui
                revient souvent</a></li>
    </ul>
</section>
<section class="surnous">
    <h4>Pour contacter le meilleur joueur directement</h4>
    <img alt="email" class="detail" src="../assets/email.png">
    <p><a href="mailto:chessweb7@gmail.com"> chessweb7@gmail.com</a></p>
    <img alt="tel" class="detail" src="../assets/phone-call.png">
    <p><a href="tel:+3307689402"> +33 07689402</a></p>
    <img alt="gps" class="detail" src="../assets/gps-navigation.png">
    <p>
        <a href="https://www.bing.com/ck/a?!&&p=cc065442ed407890JmltdHM9MTcwNDg0NDgwMCZpZ3VpZD0yOTVkNTYzOS1mODJjLTZhYzItMWIyZS00NWJmZjlmMTZiNDAmaW5zaWQ9NTY4NQ&ptn=3&ver=2&hsh=3&fclid=295d5639-f82c-6ac2-1b2e-45bff9f16b40&u=a1L21hcHM_Jm1lcGk9MjN-flRvcE9mUGFnZX5NYXBfSW1hZ2UmdHk9MTgmcT1SdWUlMjBNYW51ZWwlMkMlMjAxMzEwMCUyMEFpeC1lbi1Qcm92ZW5jZSZwcG9pcz00My41MjgwNzU1NDkzNzFfNS40NTQzNTM1NTE0MjQxM19SdWUlMjBNYW51ZWwlMkMlMjAxMzEwMCUyMEFpeC1lbi1Qcm92ZW5jZV9-JmNwPTQzLjUyODA3Nn41LjQ1NDM1NCZsdmw9MTYmdj0yJnNWPTEmRk9STT1NSVJF&ntb=1">
            Rue de Manuel - 13100</a></p>
</section>
</body>
<footer class="pied-contact">
    <p>Site sur le département informatique- Tous droits reviennent à Christine Makssoud</a></p>

<hr>
<a href="formulaire.php" id="formulaire-contact"> Nous Contacter ! </a>

</footer>

</html>