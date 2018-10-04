<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/4/2018
 * Time: 10:12 PM
 */

namespace StarbuzzCoffee;


class Beverage
{
    protected $description;
    protected $milk;
    protected $soy;
    protected $mocha;
    protected $whip;
    
    public function cost()
    {
        
    }

    public function getDescription()
    {
        
    }

    public function hasMilk()
    {
        return $this->milk;
    }

    public function setMilk($milk)
    {
        $this->milk = $milk;
    }

    public function hasSoy()
    {
        return $this->soy;
    }

    public function setSoy($soy)
    {
        $this->soy = $soy;
    }

    public function hasMocha()
    {
        return $this->mocha;
    }

    public function setMocha($mocha)
    {
        $this->mocha = $mocha;
    }

    public function hasWhip()
    {
        return $this->whip;
    }

    public function setWhip($whip)
    {
        $this->whip = $whip;
    }
}
