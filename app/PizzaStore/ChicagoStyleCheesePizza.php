<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 1:38 AM
 */

namespace PizzaStore;


use PizzaStore\Contracts\Pizza;

/**
 * Class ChicagoStyleCheesePizza
 * @package PizzaStore
 */
class ChicagoStyleCheesePizza implements Pizza
{
    /**
     * @return mixed|string
     */
    public function prepare()
    {
        return 'Prepare Chicago cheese pizza';
    }

    /**
     * @return mixed|string
     */
    public function bake()
    {
        return 'Bake Chicago cheese pizza';
    }

    /**
     * @return mixed|string
     */
    public function cut()
    {
        return 'Cut Chicago cheese pizza';
    }

    /**
     * @return mixed|string
     */
    public function box()
    {
        return 'Box Chicago cheese pizza';
    }
}
