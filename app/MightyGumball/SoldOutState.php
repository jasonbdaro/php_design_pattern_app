<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/12/2018
 * Time: 3:49 PM
 */

namespace MightyGumball;


use MightyGumball\Contracts\State;

/**
 * Class SoldOutState
 * @package MightyGumball
 */
class SoldOutState implements State
{
    private $gumballMachine;

    /**
     * SoldOutState constructor.
     * @param GumballMachine $gumballMachine
     */
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    /**
     * @return mixed|void
     */
    public function insertQuarter()
    {
        echo "You can't insert a quarter. The machine is sold out" . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function ejectQuarter()
    {
        echo "You can't eject, you haven't inserted a quarter yet" . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function turnCrank()
    {
        echo "You turned, but there are no gumballs" . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function dispense()
    {
        echo "No gumball dispensed" . PHP_EOL;
    }
}
