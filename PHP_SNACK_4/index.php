<?php 

    $studenti = [
         [
            "Nome" => "Aldo",
            "Cognome" => "Baglio",
            "Voti" => [1,2,3,4,5]
        ],

        [
            "Nome" => "Giovanni",
            "Cognome" => "Storti",
            "Voti" => [2,3,4,5,6]
        ],

         [
            "Nome" => "Giacomo",
            "Cognome" => "Poretti",
            "Voti" => [3,4,5,6,7]
        ],
    ];

    for ($i=0; $i < count($studenti) ; $i++) { ?>
        <div>
            <?= $studenti[$i]["Nome"]  ?>
            <?= $studenti[$i]["Cognome"] ?>
            <?= "Media Pagella: ".$media = array_sum($studenti[$i]["Voti"]) / count($studenti[$i]["Voti"])  ?>
        </div>
        <?php   
    }

?>