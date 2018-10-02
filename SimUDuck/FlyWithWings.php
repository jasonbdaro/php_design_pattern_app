<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/2/2018
 * Time: 11:01 AM
 */

namespace SimUDuck;

use SimUDuck\Contracts\Flyable;

class FlyWithWings implements Flyable
{
    public function fly()
    {
        // TODO: Implement fly() method.
        return 'This duck can fly with wings';
    }
}
