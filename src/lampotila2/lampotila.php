<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lasku</title>
</head>
<body>
    <div>
<?php
    function ctk(float $lampotila){
        return  ($lampotila + 273.15);
    }

    function ctf(float $lampotila){
        return ($lampotila * 9 / 5)+32;
    }    
    function ctc(float $lampotila){
        return ($lampotila);
    }
// ?>
<?php
$lampotila = $_POST['lampotila'];
$minn = $_POST['minn'];

if ($minn === "c") {
    $v = ctk($lampotila);
}
else if ($minn === "k") {
    $v = ctf($lampotila);
}
else if($minn === "c"){
    $v = ctc($lampotila);
}
/*Jos celsiusarvo > 20
    Aseta väriksi punainen
Muuten jos celsiusarvo < -20
    Aseta väriksi sininen
Muuten jos celsiusarvo >= 0 ja <= 20
    Aseta väriksi vihreä
Muuten (eli jos alle 0 ja yli -20)
    Aseta väriksi keltainen*/
if($lampotila >20)
    {
        echo "<p style='color=red'>$v</p>";
    }
else if($lampotila < -20)
    {
        echo "<p style'color=lightblue'>$v</p>";
    }
else if($lampotila > 0 and $lampotila <= 20)
    {
        echo "<p style='color:green'>$v</p>";
    }
else
    {
        echo "<p style='color:yellow'>$v</p>";
    }
?>
</div>
</body>
</html>