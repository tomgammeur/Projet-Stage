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
  <a href="#default" class="logo">Site</a>
  <div class="header-right">
    <a class="active" href="#home">Acceuil</a>
    <a href="#contact">Magasin</a>
    <a href="#compte">Me Connecter</a>
    <a href="#panier">Panier</a>

  </div>
</div>
        <b>Bienvenue sur le site</b>

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
?>
<br>
<br>
<b>
<p>Météo</p>
<div id="widget_e12c904c2ebfe42009740b93fcb865a0">
<span id="l_e12c904c2ebfe42009740b93fcb865a0"><a href="https://www.my-meteo.com/">Boulanger</a>
</span>
<script type="text/javascript">
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true
	my.src = "https://services.my-meteo.com/widget/js_design?ville=235&format=petit-horizontal&nb_jours=3&ombre1=000000&c1=ffffff&c2=17b2d3&c3=ffffff&c4=ffffff&c5=ffffff&police=10&t_icones=1&fond=0&masque=7&x=476&y=80&d=0&id=e12c904c2ebfe42009740b93fcb865a0"
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z)

</script>
</div>
<br>
<br>
<br>
<br>
<?php echo "Dernière actualisation depuis le : ";
 echo date( "d/m/Y H:i:s",);?>
   <footer>
  <p>footer</p>  
  </footer>
</body>
</html>
