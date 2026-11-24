<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP6 - Traitement d'un formulaire</title>
</head>
<body style="font-family: Arial; margin: 40px;">

    <h1>Calcul du total</h1>

    <form method="post" action="05-formulaire.php">
        <label>Produit :</label>
        <input type="text" name="produit">
        <br><br>
        <label>Catégorie :</label>
        <input type="text" name="categorie">
        <br><br>
        <label>Prix :</label>
        <input type="number" name="prix">
        <br><br>
        <label>Quantité :</label>
        <input type="number" name="quantite">
        <br><br>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if (isset($_POST["produit"])) {
        $produit = $_POST["produit"];
        $categorie = $_POST["categorie"];
        $prix = $_POST["prix"];
        $quantite = $_POST["quantite"];
        $total = $prix * $quantite;

        echo "<h2>Résultat</h2>";
        echo "<p>Produit : " . $produit . "</p>";
        echo "<p>Catégorie : " . $categorie . "</p>";
        echo "<p>Prix : " . $prix . " DH</p>";
        echo "<p>Quantité : " . $quantite . "</p>";
        echo "<p>Total : " . $total . " DH</p>";
    }
    ?>

</body>
</html>
