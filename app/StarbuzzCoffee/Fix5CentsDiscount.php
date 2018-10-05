<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/5/2018
 * Time: 9:56 AM
 */

namespace StarbuzzCoffee;


use StarbuzzCoffee\Contracts\Beverage;
use StarbuzzCoffee\Contracts\CondimentDecorator;

class Fix5CentsDiscount extends CondimentDecorator
{
    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->size = $beverage->getSize();
    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
        return $this->beverage->getDescription() . " with 5 pesos discount";
    }

    public function cost()
    {
        // TODO: Implement cost() method.
        return $this->beverage->cost() - 5;
    }
}