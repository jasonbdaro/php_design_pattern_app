<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 2:40 PM
 */

namespace RemoteCommands;

/**
 * Class Light
 * @package RemoteCommands
 */
class Light
{
    /**
     * @return string
     */
    public function on()
    {
        echo 'Light is turned on' . PHP_EOL;
    }

    /**
     * @return string
     */
    public function off()
    {
        echo 'Light is turned off' . PHP_EOL;
    }
}
