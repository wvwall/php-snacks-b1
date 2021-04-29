<?php 

    $studenti = [
         [
            "Nome" => "nome1",
            "Cognome" => "cognome1",
            "Voti" => [1,2,3,4,5]
        ],

        [
            "Nome" => "nome2",
            "Cognome" => "cognome2",
            "Voti" => [2,3,4,5,6]
        ],

         [
            "Nome" => "nome3",
            "Cognome" => "cognome3",
            "Voti" => [3,4,5,6,7]
        ],
    ];

    for ($i=0; $i < count($studenti) ; $i++) { ?>
        <div>
            <?= $studenti[$i]["Nome"]  ?>
            <?= $studenti[$i]["Cognome"] ?>
            <?= "Media Pagella: ".$media = array_sum($studenti[$i]["Voti"])/count($studenti[$i]["Voti"])  ?>
        </div>
        <?php   
    }

?>