<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <label for="">Lämpötila muunnos</label>
    <br><br>
    <div class="container" id="valikkoo">
        <label for="mist">Mistä</label>
        <select name="mist" id="mist">
            <option value="c" selected>Celcius</option>
            <option value="f">Ferenheit</option>
            <option value="k">Kelvin</option>
        </select>
      
        <label for="minn">Minne</label>
        <select name="minn" id="minn">
            <option value="c">Celcius</option>
            <option value="f">Ferenheit</option>
            <option value="k" selected>Kelvin</option>
        </select>
        <br><br>
        <label for="luku">aseta luku</label>
        <input type="number" id="luku" value="">
    </div>
</form>
</body>
</html>