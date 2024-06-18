<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur le site</title>
    <link rel="shortcut icon" type="image/icon" href="C:\Users\BL203616\Documents\favicon.ico">
    <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
<a href="/index.php" class="logo">Site</a>
  <div class="header-right">
    <a href="/index.php">Acceuil</a>
    <a class="active" href="/shop.php">Magasin</a>
    <a href="/compte.php">Me Connecter</a>
    <a href="/panier.php">Panier</a>

  </div>
</div>
        <h2>Magasin</h2>

    <br>
    <br>
<li></li>
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

<br>
<br>
<br>
<br>
   <footer>
  <p>footer</p>  
  </footer>
</body>
</html>