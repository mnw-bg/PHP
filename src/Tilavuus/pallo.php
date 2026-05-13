<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LASKIN</title>
</head>
<body>

<?php
function laskeTilavuus($sade) {
    $pi = 3.14;
    return (4*$pi*pow($sade, 3))/3 ;
} 


    $sade = ($_POST["sade"]);
    $tilavuus = laskeTilavuus($sade);  
    echo "Säde: $sade cm"; 
    echo "<p>Pallon tilavuus: " . number_format($tilavuus, 2, ',', ' ') . " cm³</p>";
?>


</div>
</form>
</form>
</body>
</html>