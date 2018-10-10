<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 3:08 PM
 */

namespace HomeTheater;

/**
 * Class TheaterLights
 * @package HomeTheater
 */
class TheaterLights
{
    /**
     * @param $level
     */
    public function dim($level)
    {
        echo "Set light brightness to {$level}" . PHP_EOL;
    }

    public function on()
    {
        echo "Turn on the light" . PHP_EOL;
    }
}
