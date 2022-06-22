<?php

// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
//Olimpia Milano - Cantù | 55-60


$match = [
    [
        "home" => ["name" => "Olimpia Milano", "score" => 50],
        "outsider" => ["name" => "Cantu", "score" => 60]
    ],
    [
        "home" => ["name" => "Armani Jeans", "score" => 80],
        "outsider" => ["name" => "Olimpia Milano", "score" => 76]
    ],
    [
        "home" => ["name" => "Armani Jeans", "score" => 80],
        "outsider" => ["name" => "Cantu", "score" => 90]
    ],
    [
        "home" => ["name" => "Bologna", "score" => 80],
        "outsider" => ["name" => "Firenze", "score" => 79]
    ],
];

for ($i = 0; $i < count($match); $i++) {
    echo $match[$i]["home"]["name"] . " - " . $match[$i]["outsider"]["name"] . " | " . $match[$i]["home"]["score"] . "-" . $match[$i]["outsider"]["score"] . "<br>";
}
