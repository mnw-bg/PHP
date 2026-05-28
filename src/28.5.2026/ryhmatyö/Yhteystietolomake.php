<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Yhteistietolomake</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tyyli.css">
</head>
<body>
    <?php
    $nimi = $_POST["nimi"];

    echo "<div><h1>Kiitos viestistäsi " . $nimi , "!</h1><br>" . "<h2>Otamme sinuun pian yhteyttä.</h2></div>";
    ?>
</body>
</html>