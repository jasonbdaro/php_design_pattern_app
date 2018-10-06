<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 1:39 AM
 */

namespace PizzaStore;


use PizzaStore\Contracts\Pizza;

/**
 * Class ChicagoStyleClamPizza
 * @package PizzaStore
 */
class ChicagoStyleClamPizza implements Pizza
{
    /**
     * @return mixed|string
     */
    public function prepare()
    {
        return 'Prepare Chicago clam pizza';
    }

    /**
     * @return mixed|string
     */
    public function bake()
    {
        return 'Bake Chicago clam pizza';
    }

    /**
     * @return mixed|string
     */
    public function cut()
    {
        return 'Cut Chicago clam pizza';
    }

    /**
     * @return mixed|string
     */
    public function box()
    {
        return 'Box Chicago clam pizza';
    }
}
