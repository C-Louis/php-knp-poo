<?php

abstract class AbstractShip
{
    // Attributes
    private $id;
    private $name;
    private $weaponPower = 0;
    private $strength = 0;

    // Constructor
    /**
     * AbstractShip constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
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
     * @param bool $useShortFormat
     * @return string
     */
    public function getNameAndSpecs($useShortFormat = false)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        }
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

}