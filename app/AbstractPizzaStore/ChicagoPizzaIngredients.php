<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 11:21 PM
 */

namespace AbstractPizzaStore;


use AbstractPizzaStore\Contracts\PizzaIngredients;

/**
 * Class ChicagoPizzaIngredients
 * @package AbstractPizzaStore
 */
class ChicagoPizzaIngredients implements PizzaIngredients
{
    /**
     * @return ThickCrustDough
     */
    public function createDough()
    {
        return new ThickCrustDough();
    }

    /**
     * @return PlumTomatoSauce
     */
    public function createSauce()
    {
        return new PlumTomatoSauce();
    }

    /**
     * @return Mozzarella
     */
    public function createCheese()
    {
        return new Mozzarella();
    }

    /**
     * @return array
     */
    public function createVeggies()
    {
        return [
            new Eggplant(),
            new Spinach(),
            new BlackOlives(),
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
     * @return FrozenClam
     */
    public function createClam()
    {
        return new FrozenClam();
    }
}
