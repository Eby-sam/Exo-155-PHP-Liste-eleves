<?php

$tableau = [ 0 => ["King","Eby","17","Magnolia", "passions"=> ["Jeux vidéos","chat","dormir"]],
    1 => ["Coquelet","samuel","31","Fourmies", "passions"=> ["Jeux vidéos","dormir","chat"]],
    2 => ["Coquelet","Coralie","39","Plougastel", "passions"=> ["shopping","enfants","jeux de scoiétés"]],
    3 => ["Coquelet","Christophe","37","Hasvan", "passions"=> ["Jeux vidéos","ces fille","Bob Marley"]]
];

echo "<h1>Liste des élèves :</h1><br>";

foreach ($tableau as $index => $eleves){
    echo "<a class='listes' href='note.php?index=$index'>$eleves[0] $eleves[1]</a><br>";
}

?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des élèves</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


</body>
</html>