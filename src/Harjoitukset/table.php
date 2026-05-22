<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table-sivu</title>
</head>
<body>
    <h1>Luottu taulukko</h1>
    <?php
        // haetaan parametrit muuttujaan jotka lomake on lähettänyt
        $rivit = $_POST["rivit"];
        $sarake = $_POST["sarake"];
        $vari = $_REQUEST["varit"];

        // echo  $rivit;
        echo "<table border=1 bgcolor=$vari>";
        //rivit ja sarakke
        for($i=1; $i<=$rivit; $i++)
            {
                echo "<tr>";//rivin alku
                    for($j=1;$j<=$sarake;$j++)
                        {
                            echo "<td bgcolor=lightblue>";
                                echo "rivi $i solu $j";
                            echo "</td>"; 
                        }

                echo "</tr>";//rivin loppu
            }
        echo "</table>"
    ?>
    
</body>
</html>