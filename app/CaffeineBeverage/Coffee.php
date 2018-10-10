<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 5:26 PM
 */

namespace CaffeineBeverage;


use CaffeineBeverage\Contracts\CaffeineBeverage;

/**
 * Class Coffee
 * @package CaffeineBeverage
 */
class Coffee extends CaffeineBeverage
{
    /**
     * @return mixed|void
     */
    public function brew()
    {
        echo 'Brew coffee in boiling water' . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function addCondiments()
    {
        echo 'Add sugar and milk' . PHP_EOL;
    }

    /**
     * The coffee class overrides the hooks method from its parent
     * In our case, we don't want to add a condiment to a coffee.
     * @return bool
     */
    public function hooks()
    {
        return false;
    }
}
