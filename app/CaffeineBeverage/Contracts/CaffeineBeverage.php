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
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
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
}
