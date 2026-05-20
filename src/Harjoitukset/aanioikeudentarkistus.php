<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>äänenoikeudentarkistus</title>
</head>
<body>
    <form action="aanioikeudentarkistus.php" method="POST">
        <input type="text" name="nimi">
        <input type="number" name="ika">
        <input type="submit" value="Siirry lopetussivulle">
    </form>
<?php

    if($_SERVER['REQUEST_METHOD']==='POST')
        {
            // if(isset($_REQUEST['nimi']))
            //     {
            //         $nimi=$_REQUEST['nimi'];
            //         echo 'moi ' . $nimi;
            //     }
            //     else{
            //         echo 'Et syötänyt nimi';
            //     }
         if (empty($_POST['ika']))
            {
                echo "<p style=' color:red;'>Et syötänyt nimi</p>";
            }else {
                $ika = $_POST['ika'];
                if (filter_var($ika, FILTER_VALIDATE_INT)===FALSE){
                    echo "<p style='color:red'></p>";
                }
                else{
                    $ika = intval($ika);

                    if ($ika<0){
                         echo "<p style='color:red;'>Negatiivinen ika</p>";
                    }
                    else if ($ika<18){
                         echo "<p style='color:red;'>Et pääsee</p>";

                    }
                }
            }
        }

?>
</body>
</html>