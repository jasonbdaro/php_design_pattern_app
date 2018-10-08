<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 11:59 PM
 */

namespace AbstractPizzaStore;


use AbstractPizzaStore\Contracts\Pizza;
use AbstractPizzaStore\Contracts\PizzaIngredients;

/**
 * Class PepperoniPizza
 * @package AbstractPizzaStore
 */
class PepperoniPizza extends Pizza
{
    protected $ingredients;

    /**
     * PepperoniPizza constructor.
     * @param PizzaIngredients $ingredients
     */
    public function __construct(PizzaIngredients $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function prepare()
    {
        $this->dough = $this->ingredients->createDough();
        $this->sauce = $this->ingredients->createSauce();
        $this->cheese = $this->ingredients->createCheese();
        $this->pepperoni = $this->ingredients->createPepperoni();
    }
}