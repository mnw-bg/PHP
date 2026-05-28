<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kertotaulu</title>
</head>
<body>
    <?php
    echo "<h1>Kertotaulu</h1>";

    for ($i = 1;$i<=10;$i=$i+1){
        $tulos = 7 * $i;
        echo "<p>7 x $i = $tulos</p>";
    }
    // 
    // // taulukon läpikäynti for-silmukalla
    //  $luvut []= 1;
    //  $luvut []= 2;
    //  $luvut []= 3;
    //  $luvut []= 4;
    //  $luvut []= 5;
    //  $luvut []= 6;
    //  $luvut []= 7;
    //  $luvut []= 8;
    //  $luvut []= 9;

    // for ($j = 0;$j<count($luvut);$j++){
    //     echo "<p>luku:{$luvut[$j]}</p>";
    // }
    echo "<hr>";
    ?>
</body>
</html>