<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 11:17 PM
 */

namespace AbstractPizzaStore\Contracts;

/**
 * Interface PizzaIngredients
 * @package AbstractPizzaStore\Contracts
 */
interface PizzaIngredients
{
    public function createDough();

    public function createSauce();

    public function createCheese();

    public function createVeggies();

    public function createPepperoni();

    public function createClam();
}
