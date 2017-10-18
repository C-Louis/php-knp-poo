<?php

class ShipLoader
{

    /**
     * Get all ships fetched from database and stored in a new array.
     * @return Ship[]
     */
    function getShips()
    {
        // Create variable to store all ships fetched from database.
        $shipsData = $this->queryForShips();
        // Create a new empty array that will store all ships.
        $ships = array();
        // Iterate on fetched ships and create new ship models to store in the $ships array.
        foreach ($shipsData as $shipData) {
            $ship = new Ship($shipData['name']);
            $ship->setWeaponPower($shipData['weapon_power']);
            $ship->setJediFactor($shipData['jedi_factor']);
            $ship->setStrength($shipData['strength']);
            $ships[] = $ship;
        }
        return $ships;
    }

    /**
     * Fetches all ships from database.
     * @return array
     */
    private function queryForShips() {
        // CREATE THE TABLE
        $pdo = new PDO('mysql:host=localhost;dbname=oo_battle', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Query
        $statement = $pdo->prepare('SELECT * FROM ship');
        $statement->execute();
        $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $shipsArray;
    }
}