<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 3:08 PM
 */

namespace HomeTheater;

/**
 * Class PopcornPopper
 * @package HomeTheater
 */
class PopcornPopper
{
    public function on()
    {
        echo 'Turn on the popcorn popper' . PHP_EOL;
    }

    public function pop()
    {
        echo 'Start popping the popcorn' . PHP_EOL;
    }

    public function off()
    {
        echo 'Turn off the popcorn popper' . PHP_EOL;
    }
}
