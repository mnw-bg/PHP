<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lomake</title>
</head>
<body>
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
    <form action="lomakkekasittely.php" method="post">
        <label for="nimi"><p>NIMI:</p></label>
        <input type="text" name="nimi" id="nimi" required>
        <br>
        <label for="ika"><p>IKA:</p></label>
        <input type="number" name="ika" id="ika" required>
        <br>
        <label for="lempivari"><p>LEMPIVÄRI:</p></label>
        <input type="text" name="lempivari" id="lempivari" required>
        <br><br>
        <input type="submit" value="lähetä">
    </form>
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
            if(isset($_POST['lempivari']))
                {
                    $lempivari=($_POST['lempivari']);
                    echo '<p>lempivärisi on ' . $lempivari . '</p>';
                }
        }
    ?>
</body>
</html>