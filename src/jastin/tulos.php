<?php

// if (isset($_GET['start']))
//     {
        $start = (int)$_GET['start'];
        $end = time();
        $secounds = $end - $start;
        // echo "ajastin on pysäytetty. kulunut aika: $secounds sekntia.";
        $minutes = floor($secounds / 60);
        $sec = $secounds % 60;
        echo " kulunut aika: $minutes minuuttia ja $sec sekuntia.";
    // }
    // else
    // {
    //     echo "Aloitusaika tai lopetusaika puuttuu.";
    // }
    
    // else
    // {
    //     echo "Aloitusaika tai lopetusaika puuttuu.";
    // }
?>