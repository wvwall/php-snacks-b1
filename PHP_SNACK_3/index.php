<?php 

$arrayPost = [
    "01/01/2021" => [

        [
            "title" => "Post 1",
            "author" => "Aldo",
        ],
        [
            "title" => "Post 2",
            "author" => "Giovanni",
        ]
    ],

    "02/02/2021" => [
        
        [
            "title" => "Post 1",
            "author" => "Giacomo",
        ],
        [
            "title" => "Post 2",
            "author" => "Al",
        ]
    ],
    "03/03/2021" => [
        
        [
            "title" => "Post 1",
            "author" => "Jonh",
        ],
        [
            "title" => "Post 2",
            "author" => "Jack",
        ]
    ],
    "04/04/2021" => [
        
        [
            "title" => "Post 1",
            "author" => "Wall",
        ],
        [
            "title" => "Post 2",
            "author" => "Walter",
        ]
    ],
 
];

foreach ($arrayPost as $key => $value) { ?>
    <div> <?= $key ?> </div>
<?php

    for ($i=0; $i < count($value) ; $i++) { ?>
        <div>Titolo: <?= $value[$i]['title'] ?></div>
        <div>Autore: <?= $value[$i]['author'] ?></div>  
        <?php
    }

}

?>