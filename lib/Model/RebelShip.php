<?php

class RebelShip extends Ship
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
}