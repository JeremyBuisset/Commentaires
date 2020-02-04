<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commentaires</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">

</head>
<body>
    <?php
    date_default_timezone_set('Europe/Paris');
    $date = time();
    $name = utf8_decode($_POST["nom"]);
    $text = utf8_decode($_POST["text"]);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "commentaires";
    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error):
        echo $conn->connect_error;
    else:
        $conn->select_db($dbname);

        $sql = utf8_decode('INSERT INTO users (`nom`, `text`, `date`) VALUES (?, ?, ?)');
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssd',$name, $text, $date);
        $stmt->execute();

        $conn->select_db($dbname);
        $sql = "SELECT * FROM `users` ORDER BY `date` DESC";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()):
            echo "Le ".date('d/m/Y - H:i:s', $row['date'])." ".utf8_encode($row['nom'])." a commenté: <br>".utf8_encode($row['text'])."<br><br>";
        endwhile;

    endif;
    ?>







</body>
</html>



