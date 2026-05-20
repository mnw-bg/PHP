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
    function ktc(float $lampotila){
        return  ($lampotila - 273.15);
    }
    function ctf(float $lampotila){
        return ($lampotila * 9 / 5)+32;
    }    
    function ftc(float $lampotila){
        return ($lampotila - 32) * 5/9;
    }    
    // function ktf(float $lampotila){
    //     return ($lampotila-273.15)*9/5+32;
    // }
    // function ftk(float $lampotila){
    //     return ($lampotila-32)*5/9+273.15;
    // }
    function ctc(float $lampotila){
        return ($lampotila);
    }
//     function ktk(float $lampotila){
//         return ($lampotila);
//     }
//     function ftf(float $lampotila){
//         return ($lampotila);
//     }
// ?>
<?php
$lampotila = $_POST['lampotila'];
$mist = $_POST['mist'];
$minn = $_POST['minn'];
if ($mist === "c" and $minn === "c") {
    $k = ctk($lampotila);
    echo $k;
}
else if ($mist === "c" and $minn === "k") {
    $k = ctk($lampotila);
    echo $k;
}
else if($mist === "k" and $minn === "c"){
    $c = ktc($lampotila);
    echo $c;
}
else if($mist === "c" and $minn === "f"){
    $f = ctf($lampotila);
    echo $f;
}
else if($mist === "f" and $minn === "c"){
    $c = ftc($lampotila);
    echo $c;
}
// else if($mist === "k" and $minn === "f"){
//     $f = ktf($lampotila);
//     echo $f;
// }
// else if($mist === "f" and $minn === "k"){
//     $k = ftk($lampotila);
//     echo $k;
// }

// elseif ($suunta === "CtoF") {

//     if ($lampotila < -40 || $lampotila > 40) {
//         die("Virhe: Celsius-lämpötilan täytyy olla välillä -40 – +40 °C.");
//     }

//     $fahrenheit = ($lampotila * 9 / 5) + 32;
//     echo "Muunnettu lämpötila: " . round($fahrenheit, 2) . " °F";
// }

?>
</div>
</body>
</html>