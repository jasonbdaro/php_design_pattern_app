<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 1:14 AM
 */

namespace PizzaStore\Contracts;

/**
 * Interface Pizza
 * @package PizzaStore\Contracts
 */
interface Pizza
{
    /**
     * @return mixed
     */
    public function prepare();

    /**
     * @return mixed
     */
    public function bake();

    /**
     * @return mixed
     */
    public function cut();

    /**
     * @return mixed
     */
    public function box();
}
