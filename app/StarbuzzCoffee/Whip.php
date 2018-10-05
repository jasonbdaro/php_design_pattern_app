<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/5/2018
 * Time: 1:42 PM
 */

namespace StarbuzzCoffee;


use StarbuzzCoffee\Contracts\Beverage;
use StarbuzzCoffee\Contracts\CondimentDecorator;

/**
 * Class Whip
 * @package StarbuzzCoffee
 */
class Whip extends CondimentDecorator
{
    /**
     * @var Beverage
     */
    protected $beverage;

    /**
     * Whip constructor.
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
        return $this->beverage->getDescription() . ", Whip";
    }

    /**
     * @return int|mixed
     */
    public function cost()
    {
        return $this->beverage->cost() + $this->setSizeCharge(5, 6, 7);
    }
}