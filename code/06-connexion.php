<?php
$hote = "localhost";
$base = "tp_php";
$user = "root";
$motdepasse = "";

try {
    $pdo = new PDO("mysql:host=$hote;dbname=$base;charset=utf8mb4", $user, $motdepasse);
    echo "<h1>Connexion PDO</h1>";
    echo "<p>Connexion réussie à la base de données " . $base . ".</p>";
} catch (PDOException $e) {
    echo "<h1>Connexion PDO</h1>";
    echo "<p>Erreur : " . $e->getMessage() . "</p>";
}
?>
