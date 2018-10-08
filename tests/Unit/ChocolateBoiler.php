<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/8/2018
 * Time: 1:07 PM
 */

namespace tests\Unit;


use PHPUnit\Framework\TestCase;
use ChocolateBoiler\ChocolateBoiler as Boiler;

class ChocolateBoiler extends TestCase
{
    public function testSingletonChocolateBoiler()
{
        $boiler = Boiler::getInstance();
        $boiler->fill();
        $boiler->boil();
        $boiler->drain();
        var_dump($boiler);
    }
}
