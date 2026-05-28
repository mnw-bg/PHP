<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LASKIN</title>
</head>
<body>
<?php
    $tunni = ($_POST["tunti"]);
    $palkka = ($_POST["palkka"]);
    $vero = ($_POST["vero"]);

    $bruttopalkka = $tunni * $palkka * 4;
    $veros = $bruttopalkka * ($vero / 100);
    $nettopalkka = $bruttopalkka - $veros;

    echo "$tunni" . " h/wiikko<br>";
    echo "$palkka" . "€/h<br>";
    echo "$vero" . "%<br>";
    echo "Bruttopalkka: " . "$bruttopalkka" . "€<br>";
    echo "vero: " . "$veros" . "€<br>";
    echo "nettopalkka: " . "$nettopalkka" . "€<br>";
?>


</div>
</form>
</form>
</body>
</html>