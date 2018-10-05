<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/4/2018
 * Time: 10:19 PM
 */

namespace StarbuzzCoffee;


use StarbuzzCoffee\Contracts\Beverage;

/**
 * Class HouseBlend
 * @package StarbuzzCoffee
 */
class HouseBlend extends Beverage
{
    /**
     * HouseBlend constructor.
     * @param string $size
     */
    public function __construct($size = "")
    {
        $this->setSize($size);
        $this->description = "House Blend Coffee";
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int|mixed
     */
    public function cost()
    {
        return $this->setSizeCharge(40, 45, 50);
    }
}
