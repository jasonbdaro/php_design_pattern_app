<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/2/2018
 * Time: 11:06 AM
 */

namespace SimUDuck;

use SimUDuck\Contracts\Flyable;

class FlyWithRocket implements Flyable
{
    public function fly()
    {
        // TODO: Implement fly() method.
        return 'This duck can fly with rockets';
    }
}
