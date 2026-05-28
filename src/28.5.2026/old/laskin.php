<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LASKIN</title>
</head>
<body>
<?php
    $yhteensa = $_POST["luku1"] + $_POST["luku2"];
    $keskiarvo = ($_POST["luku1"] + $_POST["luku2"])/2;
    echo "$yhteensa" . "<br>";
    echo "$keskiarvo" . "<br>";
?>
</body>
</html>