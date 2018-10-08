<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 11:29 PM
 */

namespace AbstractPizzaStore;


use AbstractPizzaStore\Contracts\Pizza;
use AbstractPizzaStore\Contracts\PizzaIngredients;

/**
 * Class CheesePizza
 * @package AbstractPizzaStore
 */
class CheesePizza extends Pizza
{
    protected $ingredients;

    /**
     * CheesePizza constructor.
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
    }
}