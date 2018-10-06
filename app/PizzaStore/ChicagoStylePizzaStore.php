<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 1:36 AM
 */

namespace PizzaStore;


use PizzaStore\Contracts\PizzaStore;

/**
 * Class ChicagoStylePizzaStore
 * @package PizzaStore
 */
class ChicagoStylePizzaStore extends PizzaStore
{
    /**
     * ChicagoStylePizzaStore constructor.
     * @param string $type
     */
    public function __construct($type = "")
    {
        $this->setType($type);
    }

    /**
     * @param string $type
     * @return mixed|ChicagoStyleCheesePizza|ChicagoStyleClamPizza|ChicagoStylePepperoniPizza|ChicagoStyleVeggiePizza
     * @throws \Exception
     */
    public function createPizza($type = "")
    {
        $this->setType($type);

        if (PizzaType::CHEESE === $this->type)
            return new ChicagoStyleCheesePizza();
        if (PizzaType::CLAM === $this->type)
            return new ChicagoStyleClamPizza();
        if (PizzaType::VEGGIE === $this->type)
            return new ChicagoStyleVeggiePizza();
        if (PizzaType::PEPPERONI === $this->type)
            return new ChicagoStylePepperoniPizza();

        throw new \Exception('Unknown pizza type');
    }
}