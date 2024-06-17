<?php
if (!isset($_COOKIE["secret"])){
   $secret = rand(1, 100);
   setcookie("secret", $secret, time() + 24 * 3600);
}
else {
    $secret = $_COOKIE["secret"];
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $guess = intval($_POST['guess']);
    if ($guess > $secret) {
        $message = "Le chiffre proposé est trop haut.";
    } elseif ($guess < $secret) {
        $message = "Le chiffre proposé est trop bas.";
    } else {
        $message = "Félicitations ! Vous avez trouvé le bon chiffre.";
        $secret = rand(1, 100);
        setcookie("secret", $secret, time() + 24 * 3600);
    }
}
echo "<b>";
echo "Devinez le chiffre secret de 1 à 100";
echo "</b>";
echo "<br>";
echo "<br>";
$message = false;
if (!empty($message)) {
    echo $message;
}
echo "<br>";
if (!empty($guess)) {
    echo "Vous avez choisi le nombre ";
    echo $guess;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Trouvez le bon chiffre</title>
</head>
<body>  
    <form method="post" action="">
        <label for="guess">Votre tentative:</label>
        <br>
        <input type="number" id="guess" name="guess" min="1" max="100" required>
        <button type="submit">Envoyer</button>
    </form>
    <br>
</body>
</html>