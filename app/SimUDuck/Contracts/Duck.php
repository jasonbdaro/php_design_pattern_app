<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/2/2018
 * Time: 10:50 AM
 */

namespace SimUDuck\Contracts;

abstract class Duck
{
    public abstract function display();

    public function swim()
    {
        return 'All ducks can swim';
    }
}
