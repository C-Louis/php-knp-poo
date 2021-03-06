<?php

class RebelShip extends AbstractShip
{
    /**
     * @return mixed
     */
    public function getFavoriteJedi()
    {
        $coolJedis = array('Yoda', 'Ben Kenobi');
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

    /**
     * Sets the RebelShips type as 'rebel'.
     * @return string
     */
    public function getType()
    {
        return 'Rebel';
    }

    /**
     * Sets the RebelShips as functional.
     * @return bool
     */
    public function isFunctional()
    {
        return true;
    }

    /**
     * @param bool $useShortFormat
     * @return string
     */
    public function getNameAndSpecs($useShortFormat = false)
    {
        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Rebel)';
        return $val;
    }

    /**
     * @return int
     */
    public function getJediFactor()
    {
        return rand(10, 30);
    }
}