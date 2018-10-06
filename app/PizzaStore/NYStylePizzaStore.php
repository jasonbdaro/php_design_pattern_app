<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 1:22 AM
 */

namespace PizzaStore;

use PizzaStore\Contracts\PizzaStore;

/**
 * Class NYStylePizzaStore
 * @package PizzaStore
 */
class NYStylePizzaStore extends PizzaStore
{
    /**
     * NYStylePizzaStore constructor.
     * @param string $type
     */
    public function __construct($type = "")
    {
        $this->setType($type);
    }

    /**
     * @param $type
     * @return mixed|NYStyleCheesePizza|NYStyleClamPizza|NYStylePepperoniPizza|NYStyleVeggiePizza
     * @throws \Exception
     */
    public function createPizza($type = "")
    {
        $this->setType($type);

        if (PizzaType::CHEESE === $this->type)
            return new NYStyleCheesePizza();
        if (PizzaType::CLAM === $this->type)
            return new NYStyleClamPizza();
        if (PizzaType::VEGGIE === $this->type)
            return new NYStyleVeggiePizza();
        if (PizzaType::PEPPERONI === $this->type)
            return new NYStylePepperoniPizza();

        throw new \Exception('Unknown pizza type');
    }
}
