<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/12/2018
 * Time: 3:23 PM
 */

namespace MightyGumball;


use MightyGumball\Contracts\State;

/**
 * Class GumballMachine
 * @package MightyGumball
 */
class GumballMachine
{
    private $soldOut;
    private $noQuarter;
    private $hasQuarter;
    private $sold;
    private $winner;
    private $state;
    private $count = 0;

    /**
     * GumballMachine constructor.
     * @param $count
     */
    public function __construct($count)
    {
        $this->soldOut = new SoldOutState($this);
        $this->noQuarter = new NoQuarterState($this);
        $this->hasQuarter = new HasQuarterState($this);
        $this->sold = new SoldState($this);
        $this->winner = new WinnerState($this);
        $this->count = $count;
        if ($this->count > 0) {
            $this->state = $this->noQuarter;
        }
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
    }

    /**
     * @param State $state
     */
    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function releaseBall()
    {
        echo "A gumball comes rolling out of the slot" . PHP_EOL;
        if ($this->count != 0) {
            $this->count--;
        }
    }

    /**
     * @return NoQuarterState
     */
    public function getNoQuarterState()
    {
        return $this->noQuarter;
    }

    /**
     * @return HasQuarterState
     */
    public function getHasQuarterState()
    {
        return $this->hasQuarter;
    }

    /**
     * @return SoldState
     */
    public function getSoldState()
    {
        return $this->sold;
    }

    /**
     * @return SoldOutState
     */
    public function getSoldOutState()
    {
        return $this->soldOut;
    }

    /**
     * @return WinnerState
     */
    public function getWinnerState()
    {
        return $this->winner;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
}
