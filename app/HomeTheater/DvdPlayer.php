<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 3:07 PM
 */

namespace HomeTheater;

/**
 * Class DvdPlayer
 * @package HomeTheater
 */
class DvdPlayer
{
    public function on()
    {
        echo 'Turn on the dvd player' . PHP_EOL;
    }

    public function play($movie)
    {
        echo "Play the movie: {$movie}" . PHP_EOL;
    }

    public function stop()
    {
        echo 'Stop the dvd player' . PHP_EOL;
    }

    public function eject()
    {
        echo 'Eject the disc from the dvd player' . PHP_EOL;
    }

    public function off()
    {
        echo 'Turn off the dvd player' . PHP_EOL;
    }
}
