<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LASKIN</title>
</head>
<body>
<?php
    $kulutus = ($_POST["matka"] *($_POST["kulutus"]/100));
    $kustannukset = ($kulutus* $_POST["hinta"]);
    echo "$kulutus" . " l" . "<br>";
    echo "$kustannukset" . " €" . "<br>";
?>
</form>
</form>
</body>
</html>