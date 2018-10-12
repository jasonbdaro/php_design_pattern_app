<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/12/2018
 * Time: 2:39 PM
 */

namespace MightyGumball;

/**
 * Class MightyGumball
 * @package MightyGumball
 */
class MightyGumball
{
    const SOLD_OUT = 0;
    const NO_QUARTER = 1;
    const HAS_QUARTER = 2;
    const SOLD = 3;

    private $state = self::SOLD_OUT;
    private $count = 0;

    /**
     * MightyGumball constructor.
     * @param $count
     */
    public function __construct($count)
    {
        $this->count = $count;
        if ($this->count > 0) {
            $this->state = self::NO_QUARTER;
        }
    }

    public function insertQuarter()
    {
        if (self::HAS_QUARTER == $this->state) {
            echo "You can't insert another quarter" . PHP_EOL;
        } else if (self::NO_QUARTER == $this->state) {
            $this->state = self::HAS_QUARTER;
            echo "You inserted a quarter" . PHP_EOL;
        } else if (self::SOLD_OUT == $this->state) {
            echo "You can't insert a quarter. The machine is sold out" . PHP_EOL;
        } else if (self::SOLD == $this->state) {
            echo "Please wait, we're already giving you a gumball" . PHP_EOL;
        }
    }

    public function ejectQuarter()
    {
        if (self::HAS_QUARTER == $this->state) {
            echo "Quarter returned" . PHP_EOL;
            $this->state = self::NO_QUARTER;
        } else if (self::NO_QUARTER == $this->state) {
            echo "You haven't inserted a quarter" . PHP_EOL;
        } else if (self::SOLD == $this->state) {
            echo "Sorry, you already turned the crank" . PHP_EOL;
        } else if (self::SOLD_OUT == $this->state) {
            echo "You can't eject, you haven't inserted a quarter yet" . PHP_EOL;
        }
    }

    public function turnCrank()
    {
        if (self::SOLD == $this->state) {
            echo "Turning twice doesn't get you another gumball" . PHP_EOL;
        } else if (self::NO_QUARTER == $this->state) {
            echo "You turned but there is no quarter" . PHP_EOL;
        } else if (self::SOLD_OUT == $this->state) {
            echo "You turned, but there are no gumballs" . PHP_EOL;
        } else if (self::HAS_QUARTER == $this->state) {
            echo "You turned" . PHP_EOL;
            $this->state = self::SOLD;
            $this->dispense();
        }
    }

    public function dispense()
    {
        if (self::SOLD == $this->state) {
            echo "A gumball comes rolling out the slot" . PHP_EOL;
            $this->count--;
            if (0 == $this->count) {
                echo "Oops, out of gumballs" . PHP_EOL;
                $this->state = self::SOLD_OUT;
            } else {
                $this->state = self::NO_QUARTER;
            }
        } else if (self::NO_QUARTER == $this->state) {
            echo "You need to pay first" . PHP_EOL;
        } else if (self::SOLD_OUT == $this->state) {
            echo "No gumball dispensed" . PHP_EOL;
        } else if (self::HAS_QUARTER == $this->state) {
            echo "No gumball dispensed" . PHP_EOL;
        }
    }
}
