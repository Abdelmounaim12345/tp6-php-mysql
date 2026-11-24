<?php
$pdo = new PDO("mysql:host=localhost;dbname=tp_php;charset=utf8mb4", "root", "");

$sql = "SELECT * FROM products";

// Bonus : afficher uniquement les produits dont le prix est superieur a 300 DH
if (isset($_GET["min"])) {
    $sql = "SELECT * FROM products WHERE price > 300";
}

$resultat = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP6 - Produits MySQL</title>
</head>
<body style="font-family: Arial; margin: 40px;">

    <h1>Liste des produits</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total stock</th>
        </tr>
        <?php while ($produit = $resultat->fetch()) { ?>
        <tr>
            <td><?php echo $produit["id"]; ?></td>
            <td><?php echo $produit["name"]; ?></td>
            <td><?php echo $produit["price"]; ?></td>
            <td><?php echo $produit["quantity"]; ?></td>
            <td><?php echo $produit["price"] * $produit["quantity"]; ?></td>
        </tr>
        <?php } ?>
    </table>

    <p>
        <a href="07-select.php">Tous les produits</a> |
        <a href="07-select.php?min=300">Prix supérieur à 300 DH</a>
    </p>

</body>
</html>
