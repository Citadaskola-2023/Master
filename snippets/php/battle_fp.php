<?php
function createHero($name, $power, $health) {
    return ["name" => $name, "power" => $power, "health" => $health];
}

function createVillain($name, $power, $health) {
    return ["name" => $name, "power" => $power, "health" => $health];
}

function attack(&$attacker, &$target) {
    $target["health"] -= $attacker["power"];
    if ($target["health"] < 0) {
        $target["health"] = 0;
    }
}

$hero = createHero("Superman", 20, 100);
$villain = createVillain("Joker", 15, 80);

attack($hero, $villain);
echo "{$hero['name']} attacked {$villain['name']}. {$villain['name']}'s health: {$villain['health']}";
