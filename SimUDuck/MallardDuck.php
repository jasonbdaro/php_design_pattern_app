<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/2/2018
 * Time: 10:55 AM
 */

namespace SimUDuck;

use SimUDuck\Contracts\Duck;

class MallardDuck extends Duck
{
    use TypicalDucks;

    public function display()
    {
        // TODO: Implement display() method.
        return 'I am a mallard duck';
    }
}
