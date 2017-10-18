<?php


class Ship
{

    // Attributes
    private $id;
    private $name;
    private $weaponPower = 0;
    private $jediFactor = 0;
    private $strength = 0;
    private $underRepair;

    // Constructor

    /**
     * Ship constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    // Getters and setters

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return strtoupper($this->name);
    }

    /**
     * @param $strength
     * @throws Exception
     */
    public function setStrength($strength)
    {
        if (!is_numeric($strength)) {
            throw new Exception('Invalid strength passed ' . $strength);
        }
        $this->strength = $strength;
    }

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @return int
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    // METHODS

    /**
     * TODO: remove this test function
     */
    public function sayHello()
    {
        echo 'Hello';
    }

    /**
     * @return string
     */
    public function getNameAndSpecs()
    {
        return sprintf(
            '%s: w:%s, j:%s, s:%s',
            $this->name,
            $this->weaponPower,
            $this->jediFactor,
            $this->strength
        );
    }

    /**
     * Check if this ship has more strength than another one set as parameter.
     * @param $givenShip
     * @return bool
     */
    public function doesGivenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }

    /**
     * Check if a ship is not under repair.
     * @return bool
     */
    public function isFunctional()
    {
        return !$this->underRepair;
    }

}