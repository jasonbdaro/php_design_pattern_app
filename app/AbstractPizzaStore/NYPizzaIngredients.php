<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 11:18 PM
 */

namespace AbstractPizzaStore;


use AbstractPizzaStore\Contracts\PizzaIngredients;

/**
 * Class NYPizzaIngredients
 * @package AbstractPizzaStore
 */
class NYPizzaIngredients implements PizzaIngredients
{
    /**
     * @return ThinCrustDough
     */
    public function createDough()
    {
        return new ThinCrustDough();
    }

    /**
     * @return MarinaraSauce
     */
    public function createSauce()
    {
        return new MarinaraSauce();
    }

    /**
     * @return ReggianoCheese
     */
    public function createCheese()
    {
        return new ReggianoCheese();
    }

    /**
     * @return array
     */
    public function createVeggies()
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
    }

    /**
     * @return SlicedPepperoni
     */
    public function createPepperoni()
    {
        return new SlicedPepperoni();
    }

    /**
     * @return FreshClams
     */
    public function createClam()
    {
        return new FreshClams();
    }
}