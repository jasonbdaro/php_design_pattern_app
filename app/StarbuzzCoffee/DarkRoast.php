<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/4/2018
 * Time: 10:20 PM
 */

namespace StarbuzzCoffee;


class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = "Dark Roast Coffee";
    }

    public function cost()
    {
        $cost = parent::cost();
        return $cost;
    }
}
