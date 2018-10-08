<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 11:25 PM
 */

namespace AbstractPizzaStore\Contracts;

/**
 * Class Pizza
 * @package AbstractPizzaStore\Contracts
 */
abstract class Pizza
{
    protected $dough;
    protected $sauce;
    protected $veggies = [];
    protected $cheese;
    protected $pepperoni;
    protected $clam;

    public abstract function prepare();

    /**
     * @return string
     */
    public function bake()
    {
        return 'Bake for 25 minutes at 350';
    }

    /**
     * @return string
     */
    public function cut()
    {
        return 'Cutting the pizza into diagonal slices';
    }

    /**
     * @return string
     */
    public function box()
    {
        return 'Place pizza in original PizzaStore box';
    }
}
