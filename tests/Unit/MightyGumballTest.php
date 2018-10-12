<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/12/2018
 * Time: 2:56 PM
 */

namespace tests\Unit;


use MightyGumball\GumballMachine;
use PHPUnit\Framework\TestCase;

/**
 * Class MightyGumballTest
 * @package tests\Unit
 */
class MightyGumballTest extends TestCase
{
    public function testGumball()
    {
        $gumballMachine = new GumballMachine(5);
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->ejectQuarter();
        $gumballMachine->turnCrank();
    }
}
