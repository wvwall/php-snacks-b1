<?php 

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

$validName = strlen($name);
$validEmail_at = strpos($email, "@");
$validEmail_dot = strpos($email, ".");
$validAge = filter_var($age, FILTER_VALIDATE_INT);

if ($validName > 3 && $validEmail_at && $validEmail_dot && $validAge ) {
    echo $name ."<br>";
    echo $email ."<br>";
    echo $age ."<br>";
    echo "ACCESSO RIUSCITO";
    
} else {
    echo "ACCESSO NEGATO";
}


?>