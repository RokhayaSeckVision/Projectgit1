<?php
    $diametre = 0;
    $rayon = (int) $_POST["number"];
    $diametre = $rayon*2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur corrigé</title>
</head>
<body>
   <form method="POST">
    <label for="">Entrer le rayon :</label>
    <input type="text" name="number">
    <button type="submit">Envoyer</button>
   </form>
    <p>Le diamètre est : <?php echo " $diametre "; ?></p>
</body>
</html>