<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/2/2018
 * Time: 1:16 PM
 */

namespace SimUDuck;

use SimUDuck\Contracts\Duck;

class RedHeadDuck extends Duck
{
    use DucksThatFly;

    public function display()
    {
        // TODO: Implement display() method.
        return 'I am a red-head duck';
    }
}
