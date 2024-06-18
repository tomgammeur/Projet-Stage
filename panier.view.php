<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magasin</title>
    <link rel="shortcut icon" type="image/icon" href="C:\Users\BL203616\Documents\favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <a href="/index.php" class="logo">Site</a>
  <div class="header-right">
    <a href="/index.php">Acceuil</a>
    <a href="/shop.php">Magasin</a>
    <a href="/compte.php">Me Connecter</a>
    <a class="active" href="/panier.php">Panier</a>
  </div>
</div>
        <b>Panier</b>
    <br>
    <br>
    <b>Vous ne possédez aucun produit dans votre panier</b>
    <br>
    <br>
    <br>
    <br>    
    <br>
    <br>
<li>Articles recommandés</li>
<?php
$produits = [
    ['id' => 1, 'nom' => 'Produit A', 'prix' => 19.99],
    ['id' => 2, 'nom' => 'Produit B', 'prix' => 29.99],
    ['id' => 3, 'nom' => 'Produit C', 'prix' => 19.99],
    ['id' => 4, 'nom' => 'Produit D', 'prix' => 29.99],
];
echo "<div class='colonne-produits'>";
foreach ($produits as $produit) {
    echo "<div class='produit'>";
    echo "<h3>" . $produit['nom'] . "</h3>";
    echo "<p>Prix: " . $produit['prix'] . "€</p>";
    echo "</div>";
}


echo "<style>";
echo ".colonne-produits {";
echo "display: flex;";
echo "flex-direction: row";
echo "flex-wrap: nowrap";
echo"}";
echo ".produit {";
echo "border: 1px solid #ccc;";
echo "margin-bottom: 10px;";
echo "padding: 10px;";
echo "font-family: Calibri;";
echo "}";
echo "</style>";
echo "</div>";
?>
<br>
<br>
<b>

   <footer>
  <p>footer</p>  
  </footer>
</body>
</html>