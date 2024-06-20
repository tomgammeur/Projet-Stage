<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <a href="#home" class="logo">Site</a>
  <div class="header-right">
    <a href="/index.php">Acceuil</a>
    <a href="/shop.php">Magasin</a>
    <a href="/compte.php">Me Connecter</a>
    <a href="/panier.php">Panier</a>
  </div>
</div>
<?php
require "connexion.php";
$sql = "SELECT id, name, prix, photo FROM products WHERE id = " . $_GET['id'];

echo "Produit : ";
echo $_GET['id'];

$stmt = $connexion->prepare($sql);
$stmt->execute();


$product = $stmt->fetch(PDO::FETCH_ASSOC);

if ($product) {
    echo "Produit : ";
    echo "ID: " . $product['id'];
    echo "<br>";
    echo "Nom: " . $product['name'];
    echo "<br>";
    echo "Prix: " . $product['prix'];
    echo "<br>";
    echo "Lien: " . $product['photo'];
    echo '<br>';
    echo '<button class="acheter">Ajouter</button>'; 
} else {
    echo "Non trouvé.";
}
?>
<p>Description du produit.</p>
</body>
</html>
<?php

