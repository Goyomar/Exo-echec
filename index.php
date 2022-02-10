<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Echec</title>
</head>
<body>
    <main>

<?php

$pions = [
    "tour",
    "cavalier",
    "fou",
    "reine",
    "roi",
    "fou",
    "cavalier",
    "tour",
    "pion", "pion", "pion", "pion", "pion", "pion", "pion", "pion"
];

$pionsJ2 = array_reverse($pions);

[$pionsJ2[11], $pionsJ2[12]] = [$pionsJ2[12], $pionsJ2[11]];
$testJ2 = [];

$couleur=["blanc","noir","blanc","noir","blanc","noir","blanc","noir"];
for ($i=0; $i < 8; $i++) { 
    
    for ($u=0; $u < 8; $u++) { 
        echo"<div class=".$couleur[$u].">";

        if ( !empty($pions[$u+(8*$i)]) ) {
            
            echo $pions[$u+(8*$i)]." NOIR";

        } elseif ($i == 6) {

            echo $pionsJ2[$u]." BLANC";

        } elseif ($i == 7) {

            echo $pionsJ2[8+$u]." BLANC";
        }

        echo"</div>";

    }

    $couleur = array_reverse($couleur);

}
?>

    </main>
</body>
</html>

