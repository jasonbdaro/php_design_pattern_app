<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/7/2018
 * Time: 1:43 AM
 */

namespace tests\Unit;


use PHPUnit\Framework\TestCase;
use PizzaStore\ChicagoStylePizzaStore;
use PizzaStore\NYStylePizzaStore;
use PizzaStore\PizzaType;

/**
 * Class PizzaStore
 * @package tests\Unit
 */
class PizzaStore extends TestCase
{
    public function setUp()
    {
        $this->type = PizzaType::VEGGIE;
    }

    public function testNYPizzaStoreCreation()
    {
        echo 'New York Pizza Store:' . PHP_EOL;
        $nyPizzaStore = new NYStylePizzaStore($this->type);
        $nyPizzaStore->orderPizza();
        echo PHP_EOL;
    }

    public function testChicagoPizzaStoreCreation()
    {
        echo 'Chicago Pizza Store:' . PHP_EOL;
        $chicagoPizzaStore = new ChicagoStylePizzaStore($this->type);
        $chicagoPizzaStore->orderPizza();
    }
}
