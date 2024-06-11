<?php
echo "<h1>";
echo "<center>";
echo "Site";
echo "</h2>";
echo "<br>";
echo "<b>";
echo "<center>";
echo "Bienvenue sur le site";
echo "<br>";
echo "</center>";
echo '<body style="background-color: #c37f00;color: white;">';
echo '<head link rel="shortcut icon" type="image/icon" href="C:\Users\BL203616\Documents\favicon.ico" />';
echo "<br>";
echo "<br>";
echo "<li>";
echo "Dernière actualisation depuis le : ";
echo date( "d/m/Y H:i:s", );
echo "<br>";
echo "<br>";
echo "Résultats de ";
$tom = 4;
$tom = 5;
$tom = 7;
$tom = 6;
$tom = $tom * 2;
$tom = $tom * 4;
echo "tom : ";
echo $tom;
echo "<br>";
echo "<br>";
echo  '<form method="post" action="index.php">';
echo  '<label for="chiffre">Entrez un chiffre :';
echo  '</label>';
echo  ' <input type="number" id="chiffre" name="chiffre" required>';
echo  '<input type="submit" value="Envoyer">';
echo  '</form>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chiffre = $_POST["chiffre"];
    $resultat = $chiffre + $tom;
    echo "Résultats de votre test : $resultat";
}
echo "<br>";
echo "Notre selection de produits ";
echo "<br>";
echo "<br>";
$produits = [
    ['id' => 1, 'nom' => 'Produit A', 'prix' => 19.99],
    ['id' => 2, 'nom' => 'Produit B', 'prix' => 29.99],
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
echo "flex-direction: column;";
echo"}";
echo ".produit {";
echo "border: 1px solid #ccc;";
echo "margin-bottom: 10px;";
echo "padding: 10px;";
echo "font-family: Calibri;";
echo "}";
echo "</style>";
echo "</div>";
echo "<br>";
echo "<br>";
echo "<b>";
echo "Météo";
echo "<br>";
echo "<br>";
echo  '<div id="widget_e12c904c2ebfe42009740b93fcb865a0">';
echo  ' <span id="l_e12c904c2ebfe42009740b93fcb865a0"><a href="https://www.my-meteo.com/">www.my-meteo.com</a>';
echo  '</span>';
echo  '<script type="text/javascript">';
echo  '(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "https://services.my-meteo.com/widget/js_design?ville=235&format=petit-horizontal&nb_jours=3&ombre1=000000&c1=ffffff&c2=17b2d3&c3=ffffff&c4=ffffff&c5=ffffff&police=10&t_icones=1&fond=0&masque=7&x=476&y=80&d=0&id=e12c904c2ebfe42009740b93fcb865a0";
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();';
echo  '</script>';
echo  '</div>';
echo "<br>";