<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toistorakenne</title>
</head>
<body>
    <?php
    echo "<h1>For-silmukka</h1>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<p>luku:$i</p>";
    }
    echo "<hr>";
    echo "<h1>while-silmukka</h1>";
    $j=1;
    while($j<=10)
        {
            echo "<p>luku:$j</p>";
            $j++;
        }
    echo "<hr>";
    echo "<h1>while-silmukka</h1>";
    $a=0;
    while($a<=20)
        {
            echo "<p>luku:$a</p>";
            $a=$a+2;
        }
    ?>
</body>
</html>