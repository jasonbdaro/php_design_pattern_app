<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/8/2018
 * Time: 12:19 AM
 */

namespace tests\Unit;


use PHPUnit\Framework\TestCase;
use AbstractPizzaStore\ChicagoStylePizzaStore;
use AbstractPizzaStore\NYStylePizzaStore;
use PizzaStore\PizzaType;

/**
 * Class AbstractPizzaStore
 * @package tests\Unit
 */
class AbstractPizzaStore extends TestCase
{
    public function setUp()
    {
        $this->type = PizzaType::CHEESE;
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
