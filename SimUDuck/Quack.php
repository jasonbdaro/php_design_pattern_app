<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/2/2018
 * Time: 11:20 AM
 */

namespace SimUDuck;

use SimUDuck\Contracts\CanQuack;

class Quack implements CanQuack
{
    public function quack()
    {
        // TODO: Implement quack() method.
        return 'This duck can quack';
    }
}
