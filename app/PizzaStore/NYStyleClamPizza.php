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
 * Class NYStyleClamPizza
 * @package PizzaStore
 */
class NYStyleClamPizza implements Pizza
{
    /**
     * @return mixed|string
     */
    public function prepare()
    {
        return 'Prepare NY clam pizza';
    }

    /**
     * @return mixed|string
     */
    public function bake()
    {
        return 'Bake NY clam pizza';
    }

    /**
     * @return mixed|string
     */
    public function cut()
    {
        return 'Cut NY clam pizza';
    }

    /**
     * @return mixed|string
     */
    public function box()
    {
        return 'Box NY clam pizza';
    }
}
