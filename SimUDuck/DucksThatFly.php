<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/2/2018
 * Time: 11:57 AM
 */

namespace SimUDuck;

use SimUDuck\Contracts\Flyable;

trait DucksThatFly
{
    protected $flyable;

    public function setCanFly(Flyable $flyable)
    {
        $this->flyable = $flyable;
    }

    public function fly()
    {
        return $this->flyable->fly();
    }
}