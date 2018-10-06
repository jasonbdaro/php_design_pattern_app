<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 1:40 AM
 */

namespace PizzaStore;


use PizzaStore\Contracts\Pizza;

/**
 * Class ChicagoStyleVeggiePizza
 * @package PizzaStore
 */
class ChicagoStyleVeggiePizza implements Pizza
{
    /**
     * @return mixed|string
     */
    public function prepare()
    {
        return 'Prepare Chicago veggie pizza';
    }

    /**
     * @return mixed|string
     */
    public function bake()
    {
        return 'Bake Chicago veggie pizza';
    }

    /**
     * @return mixed|string
     */
    public function cut()
    {
        return 'Cut Chicago veggie pizza';
    }

    /**
     * @return mixed|string
     */
    public function box()
    {
        return 'Box Chicago veggie pizza';
    }
}
