<?php

$flights = [
    'FR2543'=> [
        'from' => "London",
        'to' => "Vilnius" 
    ],
    'W21311' => [
        'from' => "Vilnius",
        'to' => "London" 
    ],
    'FR8756' => [
        'from' => "London",
        'to' => "Amsterdam" 
    ],
    'W87902' => [
        'from' => "Amsterdam",
        'to' => "Vilnius (VNO)",
        'departure' => date_create_from_format("y-m-d-H-i","2007-06-25 "),
        'price' => 80,00,
    ],
    'W87903' => [
        'from' => "Amsterdam",
        'to' => "London" 
    ],
    'W87904' => [
        'from' => "Vilnius",
        'to' => "Barselona" 
    ],
    'W87903' => [
        'from' => "Kaunas (KUN)",
        'to' => "Vilnius (VNO)",
        'departure' => date_create_from_format("y-m-d-H-i", "2007-06-25"),
        'price' => 20,00,
    ],
    'W87903' => [
        'from' => "Kaunas (KUN)",
        'to' => "Barselona (BCN)",
        'departure' => date_create_from_format("y-m-d-H-i", "2007-06-25"),
        'price' => 100,00,
    ],
];

$airports = [
    "Kaunas (KUN)",
    "Barselona (BCN)",
    "Vilnius (VNO)",
    "Bucharest (BBU)",
    "Budapest (BUD)",
    "London (LCY)"
];
