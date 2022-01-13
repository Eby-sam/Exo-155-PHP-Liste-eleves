<?php

$tableau = [ 0 => ["King","Eby","17","Magnolia", "passions"=> ["Jeux vidéos","chat","dormir"]],
    1 => ["Coquelet","samuel","31","Fourmies", "passions"=> ["Jeux vidéos","dormir","chat"]],
    2 => ["Coquelet","Coralie","39","Plougastel", "passions"=> ["shopping","enfants","jeux de scoiétés"]],
    3 => ["Coquelet","Christophe","37","Hasvan", "passions"=> ["Jeux vidéos","ces fille","Bob Marley"]]
];

if (!isset($_GET["index"])) {
    header('Location: index.php?error=1');
}


echo "<a href='index.php'> Précédent </a>";

$index = intval($_GET['index']);

if ($index < 0){
    $index = 0;
}

foreach ($tableau[$index] as $index => $eleves){
    if ($index === "passions"){
        echo "<p>Passions : </p>";
        foreach ($eleves as $passions){
            echo "<p>$passions, </p>";
        }
    }
    else{
        echo "<p>$eleves</p>";
    }
}
?>

<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informations sur les élèves</title>
    <link rel="stylesheet" href="note.css">
</head>
<body>


</body>
</html>
