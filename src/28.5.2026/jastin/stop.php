<html>
<head>
    <title>Ajastin</title>
</head>
<body>
    <form action="tulos.php" method="get">
        <input type="hidden" name="start" value="<?php echo $_GET['start']; ?>">
        <input type="submit" value="Pysäytä ajastin">
    </form>
</body>
</html>
<?php
if (isset($_GET['start']))
    {
        $start = $_GET['start'];

        echo "<p>Ajastin on käyniss. </p>";
    }else
    {
        echo "Ajastin ei ole käynnissä tai alotusaika puuttuu.";
    }
?>