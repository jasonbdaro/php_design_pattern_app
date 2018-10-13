<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/12/2018
 * Time: 3:38 PM
 */

namespace MightyGumball;


use MightyGumball\Contracts\State;

/**
 * Class SoldState
 * @package MightyGumball
 */
class SoldState implements State
{
    private $gumballMachine;

    /**
     * SoldState constructor.
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
        echo "Please wait, we're already giving you a gumball" . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function ejectQuarter()
    {
        echo "Sorry, you already turned the crank" . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function turnCrank()
    {
        echo "Turning twice doesn't get you another gumball" . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo "Oops, out of gumballs" . PHP_EOL;
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "Sold" . PHP_EOL;
    }
}
