<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/2/2018
 * Time: 12:03 PM
 */

namespace SimUDuck;

use SimUDuck\Contracts\CanQuack;

trait DucksThatQuack
{
    protected $canQuack;

    public function setCanQuack(CanQuack $canQuack)
    {
        $this->canQuack = $canQuack;
    }

    public function quack()
    {
        return $this->canQuack->quack();
    }
}
