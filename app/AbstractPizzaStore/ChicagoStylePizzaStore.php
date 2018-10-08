<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/8/2018
 * Time: 12:06 AM
 */

namespace AbstractPizzaStore;


use PizzaStore\Contracts\PizzaStore;
use PizzaStore\PizzaType;

/**
 * Class ChicagoStylePizzaStore
 * @package AbstractPizzaStore
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
     * @param $type
     * @return CheesePizza|ClamPizza|PepperoniPizza|VeggiePizza|mixed
     * @throws \Exception
     */
    public function createPizza($type)
    {
        $this->setType($type);
        $ingredients = new ChicagoPizzaIngredients();

        if (PizzaType::CHEESE === $this->type)
            return new CheesePizza($ingredients);
        if (PizzaType::CLAM === $this->type)
            return new ClamPizza($ingredients);
        if (PizzaType::VEGGIE === $this->type)
            return new VeggiePizza($ingredients);
        if (PizzaType::PEPPERONI === $this->type)
            return new PepperoniPizza($ingredients);

        throw new \Exception('Unknown pizza type');
    }
}