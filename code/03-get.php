<?php
$nom = isset($_GET["nom"]) ? $_GET["nom"] : "inconnu";
$ville = isset($_GET["ville"]) ? $_GET["ville"] : "inconnue";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP6 - Paramètres GET</title>
</head>
<body style="font-family: Arial; margin: 40px;">

    <h1>Paramètres GET</h1>

    <p>Nom reçu : <?php echo $nom; ?></p>
    <p>Ville reçue : <?php echo $ville; ?></p>

    <p>
        <a href="03-get.php">Sans paramètre</a> |
        <a href="03-get.php?nom=Ahmed&ville=Marrakech">Avec paramètres</a>
    </p>

</body>
</html>
