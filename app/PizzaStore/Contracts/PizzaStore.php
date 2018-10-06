<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 1:12 AM
 */

namespace PizzaStore\Contracts;

use PizzaStore\PizzaType;

/**
 * Class PizzaStore
 * @package PizzaStore\Contracts
 */
abstract class PizzaStore
{
    /**
     * @var
     */
    protected $type;

    /**
     * @param $type
     */
    protected function setType($type)
    {
        $this->type = !empty($type) ? $type : PizzaType::CHEESE;
    }

    final public function orderPizza()
    {
        $pizza = $this->createPizza($this->type);
        echo $pizza->prepare() . PHP_EOL;
        echo $pizza->bake() . PHP_EOL;
        echo $pizza->cut() . PHP_EOL;
        echo $pizza->box() . PHP_EOL;
    }

    /**
     * @param $type
     * @return mixed
     */
    public abstract function createPizza($type);
}
