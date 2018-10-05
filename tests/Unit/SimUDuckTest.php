<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/2/2018
 * Time: 1:01 PM
 */

namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use SimUDuck\MallardDuck;
use SimUDuck\RedHeadDuck;
use SimUDuck\FlyWithWings;
use SimUDuck\FlyWithRocket;
use SimUDuck\Quack;

class SimUDuckTest extends TestCase
{
    public function setUp()
    {
        $this->mallardDuck = new MallardDuck();
        $this->redheadDuck = new RedHeadDuck();
    }

    public function testMallardDuck()
    {
        echo PHP_EOL;

        $this->mallardDuck->setCanFly(new FlyWithWings());
        $this->mallardDuck->setCanQuack(new Quack());
        echo $this->mallardDuck->display() . PHP_EOL;
        echo $this->mallardDuck->swim() . PHP_EOL;
        echo $this->mallardDuck->fly() . PHP_EOL;
        echo $this->mallardDuck->quack() . PHP_EOL;

        $this->assertEquals('I am a mallard duck', $this->mallardDuck->display());
    }

    public function testRedHeadDuck()
    {
        echo PHP_EOL;

        $this->redheadDuck->setCanFly(new FlyWithWings());
        echo $this->redheadDuck->display() . PHP_EOL;
        echo $this->redheadDuck->swim() . PHP_EOL;
        echo $this->redheadDuck->fly() . PHP_EOL;
        $this->redheadDuck->setCanFly(new FlyWithRocket());
        echo $this->redheadDuck->fly(). PHP_EOL;
    }
}
