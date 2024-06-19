<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="shortcut icon" type="image/icon" href="C:\Users\BL203616\Documents\favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <a href="#home" class="logo">Site</a>
  <div class="header-right">
    <a class="active" href="#home">Acceuil</a>
    <a href="/shop.php">Magasin</a>
    <a href="/compte.php">Me Connecter</a>
    <a href="/panier.php">Panier</a>
  </div>
</div>
        <b>Bienvenue sur le site</b>
<?php require "connexion.php"?>
<br>
<br>  
<blockquote>
<b>Recherchez-vous un produit ?</b></blockquote>
<center>
<form autocomplete="off" action="#">
<div class="autocomplete" style="width:300px;">
<input type="text" name="rechercher" placeholder="Rechercher">
</div>
<input type="submit"></center>
</form>
    <br>
    <br>
<li>Articles recommandés</li>
<?php
$sql = 'SELECT id, name, photo, prix
FROM products;';
foreach  ($connexion->query($sql) as $row) {

  

     echo '<a href="produit.php?id='.$row['id'].'">' .  $row['id'] . '</a>';
     print $row['id'] . "\t";
     print $row['name'] . "\t";
     print $row['photo'] . "\t";
     print $row['prix'] . "<br>";
    
  }
 echo "</div>"; 

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
