<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kertotaululomake</title>
</head>
<body>
    <h1>Kertotaululomake:T1</h1>
    <form action="" method="post">
        <label for="viesti">Viesti:</label>
        <input type="text" id="viesti" name="viesti" require>
        <br>
        <label for="tostot">Toistokerrat</label>
        <input type="number" id="toistot" name="toistot" require>
        <br>
        <input type="submit" value="lähetä">
        <button type="button">Normaali</button>
    </form>
    <?php
     if($_SERVER['REQUEST_METHOD']==='POST')
        {
            $viesti = $_POST["viesti"];
            $kertotaulu = $_POST["toistot"];

            for ($i = 0;$i <= 10; $i++)
                {
                    echo "<p> $viesti:$kertotaulu x $i =" . ($kertotaulu * $i) . "</p>";
                }
        echo "<hr>";
        echo "kertotaulu while-loop";
        $j=1;
        while($j<=10)
        {
            echo "<p> $viesti While-loopilla:$kertotaulu x $i =" . ($kertotaulu * $i) . "</p>";
            $j++;
        }

        }
    ?>
</body>
</html>