<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/4/2018
 * Time: 10:21 PM
 */

namespace StarbuzzCoffee;


class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = "Espresso Coffee";
    }

    public function cost()
    {
        $cost = parent::cost();
        return $cost;
    }
}
