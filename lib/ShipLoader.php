<?php

class ShipLoader
{

    /**
     * @return Ship[]
     */
    function getShips()
    {
        $ships = array();

// Create a ship
        $ship1 = new Ship('Jedi Starfighter');
        $ship1->setWeaponPower(5);
        $ship1->setJediFactor(15);
        $ship1->setStrength(30);
        $ships['starfighter'] = $ship1;

//Create a 2nd ship
        $ship2 = new Ship('cloakshape_fighter');
        $ship2->setWeaponPower(2);
        $ship2->setJediFactor(2);
        $ship2->setStrength(70);
        $ships['cloakshape_fighter'] = $ship2;

//Create a 3rd ship
        $ship3 = new Ship('super_star_destroyer');
        $ship3->setWeaponPower(70);
        $ship3->setJediFactor(0);
        $ship3->setStrength(500);
        $ships['super_star_destroyer'] = $ship3;

//Create a 4th ship
        $ship4 = new Ship('rz1_a_wing_interceptor');
        $ship4->setWeaponPower(4);
        $ship4->setJediFactor(4);
        $ship4->setStrength(50);
        $ships['rz1_a_wing_interceptor'] = $ship4;

        return $ships;
    }
}