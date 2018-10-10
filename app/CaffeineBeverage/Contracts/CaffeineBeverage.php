<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 5:22 PM
 */

namespace CaffeineBeverage\Contracts;

/**
 * Class CaffeineBeverage
 * @package CaffeineBeverage
 */
abstract class CaffeineBeverage
{
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();

        /**
         * Here we add a hooks to let the subclasses
         * decide if a customer wants a condiments.
         */
        if ($this->hooks()) {
            $this->addCondiments();
        }
    }

    public function boilWater()
    {
        echo 'Boil some water' . PHP_EOL;
    }

    public function pourInCup()
    {
        echo 'Pouring into cup' . PHP_EOL;
    }

    /**
     * @return mixed
     */
    public abstract function brew();

    /**
     * @return mixed
     */
    public abstract function addCondiments();

    /**
     * This hooks method controls the flow of the algorithm
     * In our case, it adds a condiments
     * @return bool
     */
    public function hooks()
    {
        return true;
    }
}
