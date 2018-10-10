<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 5:28 PM
 */

namespace CaffeineBeverage;


use CaffeineBeverage\Contracts\CaffeineBeverage;

/**
 * Class Tea
 * @package CaffeineBeverage
 */
class Tea extends CaffeineBeverage
{
    /**
     * @return mixed|void
     */
    public function brew()
    {
        echo 'Steep tea in boiling water' . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function addCondiments()
    {
        echo 'Add lemon' . PHP_EOL;
    }
}
