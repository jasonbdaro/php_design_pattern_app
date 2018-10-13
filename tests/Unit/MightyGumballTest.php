<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/12/2018
 * Time: 2:56 PM
 */

namespace tests\Unit;


use MightyGumball\GumballMachine;
use MightyGumball\GumballMonitor;
use PHPUnit\Framework\TestCase;

/**
 * Class MightyGumballTest
 * @package tests\Unit
 */
class MightyGumballTest extends TestCase
{
    public function testGumball()
    {
        $gumballMachine = new GumballMachine("Objectville", 5);
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo PHP_EOL;

        $gumballMonitor = new GumballMonitor($gumballMachine);
        $gumballMonitor->report();
    }
}
