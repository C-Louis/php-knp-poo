<?php

class BattleResult
{
    //ATTRIBUTES
    private $usedJediPower;
    private $winningShip;
    private $losingShip;

    //CONSTRUCTOR
    /**
     * BattleResult constructor.
     * @param $usedJediPower
     * @param $winningShip
     * @param $losingShip
     */
    public function __construct($usedJediPower, $winningShip = null, $losingShip = null)
    {
        $this->usedJediPower = $usedJediPower;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }


    //GETTERS AND SETTERS
    /**
     * @return boolean
     */
    public function getUsedJediPower()
    {
        return $this->usedJediPower;
    }

    /**
     * @param mixed $usedJediPower
     */
    public function setUsedJediPower($usedJediPower)
    {
        $this->usedJediPower = $usedJediPower;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @param mixed $winningShip
     */
    public function setWinningShip($winningShip)
    {
        $this->winningShip = $winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    /**
     * @param mixed $losingShip
     */
    public function setLosingShip($losingShip)
    {
        $this->losingShip = $losingShip;
    }

    /**
     * @return bool
     */
    public function isThereAWinner() {
        return $this->getWinningShip() !== null;
    }



}