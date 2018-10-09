<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 4:33 PM
 */

namespace RemoteCommands;

/**
 * Class Stereo
 * @package RemoteCommands
 */
class Stereo
{
    public function on()
    {
        echo 'Stereo is on' . PHP_EOL;
    }

    public function off()
    {
        echo 'Stereo is off' . PHP_EOL;
    }

    public  function setCd()
    {
        echo 'Stereo set CD' . PHP_EOL;
    }

    public function setDvd()
    {
        echo 'Stereo set DVD' . PHP_EOL;
    }

    public function setRadio()
    {
        echo 'Stereo set Radio' . PHP_EOL;
    }

    /**
     * @param $level
     */
    public function setVolume($level)
    {
        echo "Stereo set volume level: {$level}" . PHP_EOL;
    }
}
