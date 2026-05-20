<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kertymat</title>
</head>
<body>
    <h1>Kertotaululomake:T1</h1>
    <form action="" method="post">
        <label for="tostot">Toistokerrat</label>
        <input type="number" id="toistot" name="toistot" require>
        <br>
        <input type="submit" value="lähetä">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']==='POST')
        $kertymat = $_POST['kertymat'];
        {
        echo "kerttyma while-loop";
        $j=1;
        $summa=0;
        while($j<$kertymat)
        {
            $summa += $j;
            $j++;
        }
        echo $summa;
        }
    
    ?>
</body>
</html>