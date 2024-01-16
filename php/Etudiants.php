
<?php
session_start();
include "db.php";

$query = $db->prepare("insert into avis ( note ,message ) values (:note , :message)");
if (isset($_POST["envoyer"])) {
    $note = $_POST["note"];
    $message = $_POST["message"];

    $db->execute([

        "note" => $note,
        "message" => $message
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
?>
<main>
    <h2>Votre avis sur l'IUT nous intéresse !</h2>
    <form action="Etudiants.php" class="contact" method="post">
        <h3>Inscription !</h3>
        <label class="label" for="email">Note</label><br>
        <input class="entrer" id="email" name="note" placeholder="note/5" type="number"><br>
        <label class="label" for="sujet">Message </label><br>
        <input class="entrer" id="sujet" name="message" placeholder="que pensez vous de l'IUT" type="text"><br>
        <input type="submit" id="envoyer" name="envoyer" value="Dorian">

    </form>

</main>
</body>

</html>