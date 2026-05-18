<html>
<head>
    <title>ajastin</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="" method="post">
   <input type="text" name="nimi">
    <input type="submit" value="Siirry lopetussivulle">
</form>
<?php
    if($_SERVER['REQUEST_METHOD']==='POST')
        {
            if(isset($_POST['nimi']))
                {
                    $nimi=$_POST['nimi'];
                    echo 'moi ' . $nimi;
                }
                else{
                    echo 'Et syötänyt nimi';
                }
        }

?>
<?php
include 'jastin/jastin.php';
?>
</body>
</html>