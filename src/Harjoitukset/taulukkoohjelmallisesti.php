<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taulukko-ohjelmallisesti</title>

</head>
<body>
    <p>taulukon rivien näärä</p>
    <p>Taulukon sarakkeiden määrä</p>
    <p>Taulukon taustavärit</p>

    <form action="table.php" method="post">
        <label for="rivit">Anna rivi määrä:</label>
        <input type="number" id="rivit" name="rivit" require>
        <br>
        <label for="sarakkeet">Anna sarakemäärä:</label>
        <input type="number" id="sarakkeet" name="sarake" require>
        <br>
        <select name="varit" id="varit">
            <option value="grey">grey</option>
            <option value="red">pink</option>
            <option value="green">green</option>    
        </select>
        <button type="submit" value="lähetä">Lähetä</button>
    </form>
</body>
</html>