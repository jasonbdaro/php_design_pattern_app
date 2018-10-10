<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 5:29 PM
 */

namespace tests\Unit;


use CaffeineBeverage\Coffee;
use CaffeineBeverage\Tea;
use PHPUnit\Framework\TestCase;

/**
 * Class CaffeineBeverageTest
 * @package tests\Unit
 */
class CaffeineBeverageTest extends TestCase
{
    public function testPrepareBeverage()
    {
        $tea = new Tea();
        $tea->prepareRecipe();
        echo PHP_EOL;
        $coffee = new Coffee();
        $coffee->prepareRecipe();
    }
}
