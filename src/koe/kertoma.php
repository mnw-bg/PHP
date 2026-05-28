<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kertoma</title>
</head>
<body>
    <form action="kertoma.php" method="post">
        <input type="number" name="luku" id="luku" required>
        <input type="submit" value="lähetä">
    </form>
    <?php
    function kertoma($luku){
        if($luku<0){
            return "virhe: negatiivinen luku";
        }
        else{
        $summa = 1;
        for ($i = 1;$i <= $luku; $i++) {
            $summa *= $i;
        }
        return $summa;
        }
    }
    if($_SERVER['REQUEST_METHOD']==='POST')
    {
        $luku = $_POST["luku"];
        echo '<p>alkuperäinen luku: ' . $luku . '</p>';
        echo '<p>kertoma luku: ' . kertoma($luku) . '</p>';
    
    }
    ?>
</body>
</html>