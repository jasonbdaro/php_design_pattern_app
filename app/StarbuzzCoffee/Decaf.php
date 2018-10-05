<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/4/2018
 * Time: 10:21 PM
 */

namespace StarbuzzCoffee;


use StarbuzzCoffee\Contracts\Beverage;

/**
 * Class Decaf
 * @package StarbuzzCoffee
 */
class Decaf extends Beverage
{
    /**
     * Decaf constructor.
     * @param string $size
     */
    public function __construct($size = "")
    {
        $this->setSize($size);
        $this->description = "Decaf Coffee";
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
        return $this->setSizeCharge(20, 25, 30);
    }
}
