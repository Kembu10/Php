<?php

echo "Welke operatoren wil je uitvoeren(+,-)?";

$operator = readline();

echo "Wat is het eerste getal?";

$cijfer1 = readline();

echo "Wat is het tweede getal?";
 
$cijfer2 = readline();


if ($operator == "+") { 
     echo $cijfer1 + $cijfer2;
} else {
     echo $cijfer1 - $cijfer2;
}
?>