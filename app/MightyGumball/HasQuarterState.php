<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/12/2018
 * Time: 3:33 PM
 */

namespace MightyGumball;


use MightyGumball\Contracts\State;

/**
 * Class HasQuarterState
 * @package MightyGumball
 */
class HasQuarterState implements State
{
    private $gumballMachine;

    /**
     * HasQuarterState constructor.
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
        echo "You can't insert another quarter" . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function ejectQuarter()
    {
        echo "Quarter returned" . PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    /**
     * @return mixed|void
     */
    public function turnCrank()
    {
        echo "You turned" . PHP_EOL;
        $determineWinner = rand(1, 20) % 2 === 0 && $this->gumballMachine->getCount() > 1;
        if ($determineWinner) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    /**
     * @return mixed|void
     */
    public function dispense()
    {
        echo "No gumball dispensed" . PHP_EOL;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "Has quarter" . PHP_EOL;
    }
}
