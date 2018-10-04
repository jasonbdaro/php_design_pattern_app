<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/4/2018
 * Time: 10:21 PM
 */

namespace StarbuzzCoffee;


class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = "Decaf Coffee";
    }

    public function cost()
    {
        $cost = parent::cost();
        return $cost;
    }
}
