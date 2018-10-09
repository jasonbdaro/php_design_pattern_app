<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 2:54 PM
 */

namespace RemoteCommands;

/**
 * Class GarageDoor
 * @package RemoteCommands
 */
class GarageDoor
{
    public function up()
    {
        echo 'Garage Door is up' . PHP_EOL;
    }

    public function down()
    {
        echo 'Garage Door is down' . PHP_EOL;
    }

    public function stop()
    {
        echo 'Garage Door is stopped' . PHP_EOL;
    }

    public function lightOn()
    {
        echo "Garage Door's light is on" . PHP_EOL;
    }

    public function lightOff()
    {
        echo "Garage Door's light is off" . PHP_EOL;
    }
}
