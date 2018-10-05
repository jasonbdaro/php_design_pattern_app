<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/5/2018
 * Time: 9:12 AM
 */

namespace StarbuzzCoffee;


use StarbuzzCoffee\Contracts\Beverage;
use StarbuzzCoffee\Contracts\CondimentDecorator;

/**
 * Class Mocha
 * @package StarbuzzCoffee
 */
class Mocha extends CondimentDecorator
{
    /**
     * @var Beverage
     */
    protected $beverage;

    /**
     * Mocha constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->size = $beverage->getSize();
    }

    /**
     * @return mixed|string
     */
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    /**
     * @return int|mixed
     */
    public function cost()
    {
        return $this->beverage->cost() + $this->setSizeCharge(1, 2, 3);
    }
}
