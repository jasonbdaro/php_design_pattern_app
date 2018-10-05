<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/5/2018
 * Time: 8:18 AM
 */

namespace tests\Unit;


use PHPUnit\Framework\TestCase;
use StarbuzzCoffee\DarkRoast;
use StarbuzzCoffee\Decaf;
use StarbuzzCoffee\Fix5CentsDiscount;
use StarbuzzCoffee\Mocha;
use StarbuzzCoffee\Size;
use StarbuzzCoffee\Soy;
use StarbuzzCoffee\Whip;

/**
 * Class StarbuzzCoffee
 * @package tests\Unit
 */
class StarbuzzCoffee extends TestCase
{
    public function testMakeAnOrder()
    {
        $order1 = new Fix5CentsDiscount(
            new Whip(
                new Soy(
                    new Decaf(Size::LARGE)
                )
            )
        );

        $order2 = new Fix5CentsDiscount(
            new Soy(
                new Whip(
                    new Mocha(
                        new Mocha(
                            new DarkRoast(Size::SMALL)
                        )
                    )
                )
            )
        );

        echo $order1->getDescription() . PHP_EOL;
        echo $order1->cost() . PHP_EOL;
        echo $order2->getDescription() . PHP_EOL;
        echo $order2->cost() . PHP_EOL;
    }
}
