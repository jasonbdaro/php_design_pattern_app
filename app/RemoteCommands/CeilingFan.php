<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 8:34 AM
 */

namespace RemoteCommands;

/**
 * Class CeilingFan
 * @package RemoteCommands
 */
class CeilingFan
{
    const HIGH = 3;
    const MEDIUM = 2;
    const LOW = 1;
    const OFF = 0;
    public $speed;

    /**
     * CeilingFan constructor.
     */
    public function __construct()
    {
        $this->speed = self::OFF;
    }

    public function high()
    {
        $this->speed = self::HIGH;
        echo 'Ceiling Fan speed is high' . PHP_EOL;
    }

    public function medium()
    {
        $this->speed = self::MEDIUM;
        echo 'Ceiling Fan speed is medium' . PHP_EOL;
    }

    public function low()
    {
        $this->speed = self::LOW;
        echo 'Ceiling Fan speed is low' . PHP_EOL;
    }

    public function off()
    {
        $this->speed = self::OFF;
        echo 'Ceiling Fan speed is off' . PHP_EOL;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}
