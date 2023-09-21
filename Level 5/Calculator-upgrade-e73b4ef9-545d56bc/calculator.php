<?php

echo "welke operator--een wil je uitvoeren? ( +, -, %,)";
$a = readline();

echo "Wat is het eerste getal?";
$b = readline();
if (!is_numeric($b)) {
    echo "geen nummer";
    exit;
}
echo "Wat is het tweede getal?";
$c = readline();
if (!is_numeric($c)) {
    echo "geen nummer";
    exit;
}
if ($a == "+") {
    echo $b + $c;
} elseif ($a == "-") {
    echo $b - $c;
} elseif ($a == "% 4 == 2") {
    $b % $c;
} else {
    echo "geen geldige operatie";
    exit;
}
