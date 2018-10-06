<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 1:41 AM
 */

namespace PizzaStore;


use PizzaStore\Contracts\Pizza;

/**
 * Class ChicagoStylePepperoniPizza
 * @package PizzaStore
 */
class ChicagoStylePepperoniPizza implements Pizza
{
    /**
     * @return mixed|string
     */
    public function prepare()
    {
        return 'Prepare Chicago pepperoni pizza';
    }

    /**
     * @return mixed|string
     */
    public function bake()
    {
        return 'Bake Chicago pepperoni pizza';
    }

    /**
     * @return mixed|string
     */
    public function cut()
    {
        return 'Cut Chicago pepperoni pizza';
    }

    /**
     * @return mixed|string
     */
    public function box()
    {
        return 'Box Chicago pepperoni pizza';
    }
}
