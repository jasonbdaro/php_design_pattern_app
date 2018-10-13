<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/13/2018
 * Time: 9:38 AM
 */

namespace MightyGumball;

/**
 * Class GumballMonitor
 * @package MightyGumball
 */
class GumballMonitor
{
    private $gumballMachine;

    /**
     * GumballMonitor constructor.
     * @param GumballMachine $gumballMachine
     */
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function report()
    {
        echo "Gumball Machine: " . $this->gumballMachine->getLocation() . PHP_EOL;
        echo "Current inventory: " . $this->gumballMachine->getCount() . PHP_EOL;
        echo "Current State: " . $this->gumballMachine->getState() . PHP_EOL;
    }
}
