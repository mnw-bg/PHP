<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ehtolause</title>
</head>
<body>
    <form action="ehtolauseet.php" method="POST">
        <label for="name">
            <p>NIMI:</p>
        </label>
        <input type="text" name="nimi">
        <br>
        <label for="ika">
            <p>IKÄ:</p>
        </label>
        <input type="number" name="ika">
        <input type="submit" value="lähetä">
    </form>
<?php 
    function ika($ika){
        
        if ($ika<0){
            return "<p>$ika oot Negatiivinen ika</p>";
        }
        else if ($ika<18){
            return "<p>Alaikäinen</p>";
        }
        else if ($ika>=18 and $ika<=64){
            return "<p>$ika oot Työikainen</p>";
            }
        else {
            return "<p>$ika oot eläkelainen</p>";
        }
    }
?>
<?php 
    if($_SERVER['REQUEST_METHOD']==='POST')
        {
            if(isset($_POST['nimi']))
                {
                    $nimi=$_POST['nimi'];
                    echo 'moi ' . $nimi;
                }
            if(isset($_POST['ika']))
                {
                    $ika=$_POST['ika'];
                    echo ika($ika);
                }
        }
?>
</body>
</html>