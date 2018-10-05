<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/4/2018
 * Time: 10:20 PM
 */

namespace StarbuzzCoffee;


use StarbuzzCoffee\Contracts\Beverage;

/**
 * Class DarkRoast
 * @package StarbuzzCoffee
 */
class DarkRoast extends Beverage
{
    /**
     * DarkRoast constructor.
     * @param string $size
     */
    public function __construct($size = "")
    {
        $this->setSize($size);
        $this->description = "Dark Roast Coffee";
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
        return $this->setSizeCharge(10, 15, 20);
    }
}
