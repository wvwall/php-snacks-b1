<?php 

$arrayPost = [
    "01/01/2021" => [

        [
            "title" => "Post 1",
            "author" => "Autore 1",
        ],
        [
            "title" => "Post 2",
            "author" => "Autore 2",
        ]
    ],

    "02/02/2021" => [
        
        [
            "title" => "Post 1",
            "author" => "Autore 1",
        ],
        [
            "title" => "Post 2",
            "author" => "Autore 2",
        ]
    ],
    "03/03/2021" => [
        
        [
            "title" => "Post 1",
            "author" => "Autore 1",
        ],
        [
            "title" => "Post 2",
            "author" => "Autore 2",
        ]
    ],
    "04/04/2021" => [
        
        [
            "title" => "Post 1",
            "author" => "Autore 1",
        ],
        [
            "title" => "Post 2",
            "author" => "Autore 2",
        ]
    ],
 
];

for ($i=0; $i < count($arrayPost) ; $i++) { 
    echo $arrayPost["01/01/2021"]["title"];
}

?>