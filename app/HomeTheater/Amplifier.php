<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 3:07 PM
 */

namespace HomeTheater;

/**
 * Class Amplifier
 * @package HomeTheater
 */
class Amplifier
{
    public function on()
    {
        echo 'Turn on the amplifier' . PHP_EOL;
    }

    public function setDvd($desc)
    {
        echo "Set amplifier: {$desc}" . PHP_EOL;
    }

    public function setSurroundSound()
    {
        echo 'Set amplifier to surround sound' . PHP_EOL;
    }

    public function setVolume($level)
    {
        echo "Set amplifier sound level: {$level}" . PHP_EOL;
    }

    public function off()
    {
        echo 'Turn off the amplifier' . PHP_EOL;
    }
}
