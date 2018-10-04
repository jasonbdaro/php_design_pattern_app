<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/4/2018
 * Time: 10:19 PM
 */

namespace StarbuzzCoffee;


class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = "House Blend Coffee";
    }

    public function cost()
    {
        $cost = parent::cost();
        return $cost;
    }
}
