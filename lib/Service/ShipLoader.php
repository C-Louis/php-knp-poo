<?php

class ShipLoader
{
    private $pdo;

    private $dbDsn;
    private $dbUser;
    private $dbPass;

    /**
     * ShipLoader constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

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
            $ships[] = $this->createShipFromData($shipData);
        }
        return $ships;
    }

    /**
     * Fetch one ship by id from database.
     * @param $id
     * @return null|Ship
     */
    public function findOneById($id) {
        $pdo = $this->getPDO();
        //Prepared statement to avoid sql injection attacks.
        $statement = $pdo->prepare('SELECT * FROM ship WHERE id = :id');
        $statement->execute(array('id' => $id));
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC);

        // Check if $shipArray is valid
        if(!$shipArray) {
            return null;
        }

        return $this->createShipFromData($shipArray);
    }

    /**
     * Create a new Ship model with datas.
     * @param array $shipData
     * @return Ship
     */
    private function createShipFromData(array $shipData) {

        // Create object from Ship class or RebelShip class depending on its team.
        if ($shipData['team'] == 'rebel') {
            $ship = new RebelShip($shipData['name']);
        } else {
            $ship = new Ship($shipData['name']);
        }

        $ship->setId($shipData['id']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setJediFactor($shipData['jedi_factor']);
        $ship->setStrength($shipData['strength']);

        return $ship;
    }

    /**
     * Fetches all ships from database.
     * @return array
     */
    private function queryForShips() {
        $pdo = $this->getPDO();
        //Query
        $statement = $pdo->prepare('SELECT * FROM ship');
        $statement->execute();
        $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $shipsArray;
    }

    /**
     * @return PDO
     */
    private function getPDO()
    {
        if($this->pdo === null) {
            $pdo = new PDO($this->dbDsn, $this->dbUser, $this->dbPass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

}