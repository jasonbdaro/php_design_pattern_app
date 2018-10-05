<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/5/2018
 * Time: 9:02 AM
 */

namespace StarbuzzCoffee\Contracts;

/**
 * Class CondimentDecorator
 * @package StarbuzzCoffee\Contracts
 */
abstract class CondimentDecorator extends Beverage
{
    /** Get the description of the condiment
     * @return mixed
     */
    public abstract function getDescription();
}
