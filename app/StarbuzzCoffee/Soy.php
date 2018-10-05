<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/5/2018
 * Time: 9:29 AM
 */

namespace StarbuzzCoffee;


use StarbuzzCoffee\Contracts\Beverage;
use StarbuzzCoffee\Contracts\CondimentDecorator;

/**
 * Class Soy
 * @package StarbuzzCoffee
 */
class Soy extends CondimentDecorator
{
    /**
     * @var Beverage
     */
    protected $beverage;

    /**
     * Soy constructor.
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
        return $this->beverage->getDescription() . ", Soy";
    }

    /**
     * @return int|mixed
     */
    public function cost()
    {
        return $this->beverage->cost() + $this->setSizeCharge(3, 4, 5);
    }
}
