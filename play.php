<?php

require_once __DIR__.'/lib/Ship.php';


/**
 *
 * @param Ship $someShip
 */
function printShipSummary($someShip) {
    echo 'Ship name : '.$someShip->getName();
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs();
    echo '<hr/>';
}

$myShip = new Ship();
$myShip->setName('Jedi Starship');
$myShip->setWeaponPower(10);

$otherShip = new Ship();
$otherShip->setName('Imperial Shuttle');
$otherShip->setWeaponPower(5);
$otherShip->setStrength(50);

printShipSummary($myShip);
printShipSummary($otherShip);

if ($myShip->doesGivenShipHaveMoreStrength($otherShip)) {
    echo $otherShip->getName().' has more strength';
} else {
    echo $myShip->getName().' has more strength';
}