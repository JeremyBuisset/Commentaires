<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commentaires</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">

</head>
<body>
    <h1>Commentaires</h1>
    <form action="get_text.php" method="post">
        <label for="name">Votre nom ou pseudo</label>
        <input type="text" name="nom" id="name"><br>
        <label for="text">Votre commentaire</label>
        <textarea name="text" id="text"></textarea><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>


<?php
