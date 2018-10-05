<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/4/2018
 * Time: 10:12 PM
 */

namespace StarbuzzCoffee\Contracts;


use StarbuzzCoffee\Size;

abstract class Beverage
{
    /**
     * Description of the Beverage
     * @var string
     */
    protected $description = "Unknown beverage";

    /**
     * Size of the Beverage [ small | medium | large ]
     * @var string
     */
    protected $size;

    /**
     * Set the size of the Beverage
     * @param string $size
     */
    protected function setSize($size = "")
    {
        $this->size = !empty($size) ? $size : Size::MEDIUM;
    }

    /**
     * Get the size of the Beverage
     * @return string
     */
    protected function getSize()
    {
        return $this->size;
    }

    /**
     * Sets the default charge for every size
     * @param $smallCharge
     * @param $mediumCharge
     * @param $largeCharge
     * @return int
     */
    protected function setSizeCharge($smallCharge, $mediumCharge, $largeCharge)
    {
        if (Size::SMALL === $this->getSize())
            return $smallCharge;
        if (Size::MEDIUM === $this->getSize())
            return $mediumCharge;
        if (Size::LARGE === $this->getSize())
            return $largeCharge;

        return 0;
    }

    /**
     * Get the cost of the Beverage
     * @return mixed
     */
    protected abstract function cost();
}
