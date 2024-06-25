<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
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
<?php
session_start();
$_SESSION['prenom'] = 'tom';
 require "connexion.php";
 $sql = "SELECT id, name, prix, photo FROM products WHERE id = " . $_GET['id'];

 echo "Produit : ";
 echo $_GET['id'];

 $stmt = $connexion->prepare($sql);
 $stmt->execute();


 $product = $stmt->fetch(PDO::FETCH_ASSOC);

 if ($product) {
   echo "Votre panier : ";
   echo "ID: " . $product['id'];
   echo "<br>";
   echo "Nom: " . $product['name'];
   echo "<br>";
   echo "Prix: " . $product['prix'];
   echo "<br>";
   echo "Lien: " . $product['photo'];
   echo '<br>';
 } else {
   echo "Vous ne possedez aucun produit dans votre panier.";
 }
 ?>

?>
    <br>
    <br>
    <br>
    <br>    
    <br>
    <br>
<li>Articles recommandés</li>
<?php
$sql = 'SELECT id, name, photo, prix
FROM products;';
foreach  ($connexion->query($sql) as $row) {



     echo '<a href="produit.php?id='.$row['id'].'">' .  $row['id'] . '</a>';
     print $row['id'] . "<br>";
     print $row['name'] . "<br>";
     print $row['photo'] . "<br>";
     print $row['prix'] . "<br>";
    
  }
 echo "</div>"; 

echo "</div>";


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
//Exemple d'entrainement (veuillez retirer tous les //)
//$toto = "bonjour je m'appele tom";
//if (strlen($toto)>500){
//echo "toto existe";
//} else {
//    echo "toto n'existe pas";
//}
//echo strtoupper("tom");
//echo strlen("tom");

?>
<br>
<br>
<b> 
   <footer>
  <p>footer</p>  
  </footer>
</body>
</html>
