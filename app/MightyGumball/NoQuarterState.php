<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/12/2018
 * Time: 3:16 PM
 */

namespace MightyGumball;


use MightyGumball\Contracts\State;

/**
 * Class NoQuarterState
 * @package MightyGumball
 */
class NoQuarterState implements State
{
    private $gumballMachine;

    /**
     * NoQuarterState constructor.
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
        $this->gumballMachine->setState(
            $this->gumballMachine->getHasQuarterState()
        );
        echo "You inserted a quarter" . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function ejectQuarter()
    {
        echo "You haven't inserted a quarter" . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function turnCrank()
    {
        echo "You turned but there is no quarter" . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function dispense()
    {
        echo "You need to pay first" . PHP_EOL;
    }
}
