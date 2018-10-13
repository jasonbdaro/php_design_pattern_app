<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/12/2018
 * Time: 4:36 PM
 */

namespace MightyGumball;


use MightyGumball\Contracts\State;

/**
 * Class WinnerState
 * @package MightyGumball
 */
class WinnerState implements State
{
    private $gumballMachine;

    /**
     * WinnerState constructor.
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
        echo "You're a winner! You get two gumballs for your quarter" . PHP_EOL;
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() == 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo "Oops, out of gumballs" . PHP_EOL;
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "Winner" . PHP_EOL;
    }
}
