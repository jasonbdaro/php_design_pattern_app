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
 * Class NYStyleCheesePizza
 * @package PizzaStore
 */
class NYStyleCheesePizza implements Pizza
{
    /**
     * @return mixed|string
     */
    public function prepare()
    {
        return 'Prepare NY cheese pizza';
    }

    /**
     * @return mixed|string
     */
    public function bake()
    {
        return 'Bake NY cheese pizza';
    }

    /**
     * @return mixed|string
     */
    public function cut()
    {
        return 'Cut NY cheese pizza';
    }

    /**
     * @return mixed|string
     */
    public function box()
    {
        return 'Box NY cheese pizza';
    }
}
