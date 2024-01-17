<?php
session_start();
include "db.php";

$query = $db->prepare("insert into avis ( note ,message, auteur ) values (:note , :message , :auteur)");
if (isset($_POST["envoyer"])) {
    $note = $_POST["note"];
    $message = $_POST["message"];
    $auteur = $_POST["auteur"];

    $query->execute([

        "note" => $note,
        "message" => $message,
        "auteur" => $auteur
    ]);
}

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
    <link class="classique" href="../css/Etudiants.css" rel="stylesheet">
    <link class="traditionnel" disabled href="../css/Etudiants-sombre.css" rel="stylesheet">
    <link href=/ rel="shortcut icon" type="image/png"/>
    <link href="../assets/favicone/favicon-96x96.png" rel="shortcut icon">
    <script defer src="../js/main.js"></script>

</head>
<body>
<?php
$etudiant = true;
include "navbar.php";

if (isset($_SESSION["logIn"])) {
    echo '
    <form id="contact"  action="Etudiants.php" class="contact" method="post">
        <h1>Votre avis sur l\'IUT nous intéresse !</h1>
        <label class="label" for="sujet"> Auteur </label><br>
        <input class="entrer" id="email" name="auteur" placeholder="Auteur ?" type="text"><br>
        <label class="label" for="email">Note</label><br>
        <input class="entrer" id="email" name="note" placeholder="note/5" type="number"><br>
        <label class="label" for="sujet">Message </label><br>
        <textarea class="entrer" id="sujet" name="message" placeholder="que pensez vous de l\'IUT"> </textarea> <br>
        <input type="submit" id="envoyer" name="envoyer" value="Partager">
    </form>
    ';

    $query = $db->prepare("SELECT note, message, auteur FROM avis ORDER BY id_avis DESC");
    $query->execute();



    foreach ($query->fetchAll() as $avisData) {
        $note = $avisData['note'];
        $message = $avisData['message'];
        $auteur = $avisData['auteur'];


        if ($note>5){
            $note = 5;
        }
        else if ($note<0) {

            $note = 0;
        }

        echo '<p class="retour" id="auteur">' . $auteur . '</p> ';
        for ($i = 0; $i < $note; ++$i) {
            echo '<img class="retour" id="etoile" src="../assets/etoile.webp" alt="etoile" height="50px">';
        }

        echo '<p class="retour" id="avis">' . $message . ' <hr id="separation"> </p>';
    }
}
else {


    echo "
<section id='messageConnexion'>
<p> Vous n'avez pas le droit d'accéder à cette page tant que vous n'êtes pas Connecté</p> 
<a href='connexion.php'> Connectez-vous ici </a>' 
</section>
";
}
?>



</main>
</body>
<footer>
    <hr>
    <a href="formulaire.php" id="formulaire-contact"> Nous Contacter ! </a>
</footer>
</html>