<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 11:41 PM
 */

namespace AbstractPizzaStore;


use PizzaStore\Contracts\PizzaStore;
use PizzaStore\PizzaType;

/**
 * Class NYStylePizzaStore
 * @package AbstractPizzaStore
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
     * @param string $type
     * @return CheesePizza|ClamPizza|PepperoniPizza|VeggiePizza|mixed
     * @throws \Exception
     */
    public function createPizza($type = "")
    {
        $this->setType($type);
        $ingredients = new NYPizzaIngredients();

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