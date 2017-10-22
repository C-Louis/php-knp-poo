<?php

class Ship extends AbstractShip
{
    private $jediFactor = 0;
    private $underRepair;

    /**
     * Ship constructor.
     * @param $name
     */
    public function __construct($name)
    {
        parent::__construct($name);

        $this->underRepair = mt_rand(1, 100) < 30;
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
     * Check if a ship is not under repair.
     * @return bool
     */
    public function isFunctional()
    {
        return !$this->underRepair;
    }

    /**
     * Sets the RebelShips type as 'empire'.
     * @return string
     */
    public function getType()
    {
        return 'Empire';
    }

}