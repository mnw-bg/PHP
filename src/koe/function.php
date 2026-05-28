<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <form action="function.php" method="post">
        <label for="luku"><p>Luku</p></label>
        <input type="number" name="luku" id="luku">
        <input type="submit" value="lähetä">
    </form>
    <?php
    function nelio($luku){
        return pow($luku, 2);
    }
    function onkoparillinen($luku){
        if ($luku%2 === 0){
            return "parillinen";
        }
        else{
            return "pariton";
        }
    }
    ?>
    <?php 
    if($_SERVER['REQUEST_METHOD']==='POST')
        {
            $luku = $_POST["luku"];
            echo nelio($luku);
            echo onkoparillinen($luku);
        }
    ?>
</body>
</html>