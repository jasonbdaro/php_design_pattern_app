<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 11:32 PM
 */

namespace AbstractPizzaStore;


use AbstractPizzaStore\Contracts\Pizza;
use AbstractPizzaStore\Contracts\PizzaIngredients;

/**
 * Class ClamPizza
 * @package AbstractPizzaStore
 */
class ClamPizza extends Pizza
{
    protected $ingredients;

    /**
     * ClamPizza constructor.
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
        $this->clam = $this->ingredients->createClam();
    }
}
