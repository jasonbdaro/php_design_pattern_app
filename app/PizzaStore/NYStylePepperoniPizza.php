<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 1:23 AM
 */

namespace PizzaStore;


use PizzaStore\Contracts\Pizza;

/**
 * Class NYStylePepperoniPizza
 * @package PizzaStore
 */
class NYStylePepperoniPizza implements Pizza
{
    /**
     * @return mixed|string
     */
    public function prepare()
    {
        return 'Prepare NY pepperoni pizza';
    }

    /**
     * @return mixed|string
     */
    public function bake()
    {
        return 'Bake NY pepperoni pizza';
    }

    /**
     * @return mixed|string
     */
    public function cut()
    {
        return 'Cut NY pepperoni pizza';
    }

    /**
     * @return mixed|string
     */
    public function box()
    {
        return 'Box NY pepperoni pizza';
    }
}
