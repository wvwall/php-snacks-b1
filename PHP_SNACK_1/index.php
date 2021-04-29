<?php 

    $partite_basket = [
        "partita1" => [
            "squadre" => "Olimpia Milano - Cantù",
            "risultato" => "| 90 - 88"
        ],
        "partita2" => [
            "squadre" => "Siena - Bologna",
            "risultato" => "| 55 - 60"
        ],
    ];


    /* var_dump($partite_basket); */

    for ($i=1; $i <= count($partite_basket) ; $i++) { ?>
        <div>
        <?= $partite_basket["partita".$i]["squadre"] ?>
        <?= $partite_basket["partita".$i]["risultato"] ?>
        </div>
        <?php
    }
?>