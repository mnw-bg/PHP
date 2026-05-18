<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LASKIN</title>
    <style>
        div{
            background-color:darkgrey;
            width:max-content;
            padding:20px;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<div>
<?php
$lampotila = $_POST['lampotila'];
$suunta = $_POST['suunta'];

if ($suunta === "FtoC") {
    $celsius = ($lampotila - 32) * 5 / 9;

    if ($celsius < -40 || $celsius > 40) {
        die("Virhe: Fahrenheit-arvo vastaa Celsius-lämpötilaa, joka ei ole sallitulla välillä (-40 – +40 °C).");
    }

    echo "Muunnettu lämpötila: " . round($celsius, 2) . " °C";
}

elseif ($suunta === "CtoF") {

    if ($lampotila < -40 || $lampotila > 40) {
        die("Virhe: Celsius-lämpötilan täytyy olla välillä -40 – +40 °C.");
    }

    $fahrenheit = ($lampotila * 9 / 5) + 32;
    echo "Muunnettu lämpötila: " . round($fahrenheit, 2) . " °F";
}

?>
</div>


</div>
</form>
</form>
</body>
</html>