<?php

if (empty($argv[1])) {
    echo "Geen tijd meegegeven";
    exit;
}

$all = 0;
$seconden = 0;

foreach ($argv as $count) {
    $tijdsetting = substr($count, -1);
    switch ($tijdsetting) {
        case "d":
            $seconden += (int)$count * 24 * 60 * 60;
            break;
        case "u":
            $seconden += (int)$count * 60 * 60;
            break;
        case "m": 
            $seconden += (int)$count * 60;
            break;
        case "s":
            $seconden += (int)$count;
            break;
    } 
}

$all = $seconden;
echo "De totale tijd is $all seconden" . PHP_EOL;

?>