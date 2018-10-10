<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 3:08 PM
 */

namespace HomeTheater;

/**
 * Class Projector
 * @package HomeTheater
 */
class Projector
{
    public function on()
    {
        echo 'Turn on the projector' . PHP_EOL;
    }

    public function wideScreenMode()
    {
        echo 'Set projector to wide screen mode' . PHP_EOL;
    }

    public function off()
    {
        echo 'Turn off the projector' . PHP_EOL;
    }
}
