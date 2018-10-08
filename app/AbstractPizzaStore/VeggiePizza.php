<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 11:57 PM
 */

namespace AbstractPizzaStore;


use AbstractPizzaStore\Contracts\Pizza;
use AbstractPizzaStore\Contracts\PizzaIngredients;

/**
 * Class VeggiePizza
 * @package AbstractPizzaStore
 */
class VeggiePizza extends Pizza
{
    protected $ingredients;

    /**
     * VeggiePizza constructor.
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
        $this->veggies = $this->ingredients->createVeggies();
    }
}