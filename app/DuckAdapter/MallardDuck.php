<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 10:51 AM
 */

namespace DuckAdapter;


use DuckAdapter\Contracts\Duck;

/**
 * Class MallardDuck
 * @package DuckAdapter
 */
class MallardDuck implements Duck
{
    /**
     * @return mixed|void
     */
    public function quack()
    {
        echo 'Quack' . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function fly()
    {
        echo 'Fly' . PHP_EOL;
    }
}
