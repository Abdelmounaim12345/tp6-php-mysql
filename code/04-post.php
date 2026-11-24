<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP6 - Formulaire POST</title>
</head>
<body style="font-family: Arial; margin: 40px;">

    <h1>Formulaire POST</h1>

    <form method="post" action="04-post.php">
        <label>Nom :</label>
        <input type="text" name="nom">
        <br><br>
        <label>Ville :</label>
        <input type="text" name="ville">
        <br><br>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if (isset($_POST["nom"])) {
        echo "<h2>Données reçues</h2>";
        echo "<p>Nom : " . $_POST["nom"] . "</p>";
        echo "<p>Ville : " . $_POST["ville"] . "</p>";
    }
    ?>

</body>
</html>
