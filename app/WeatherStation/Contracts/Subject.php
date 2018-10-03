<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/3/2018
 * Time: 4:41 PM
 */

namespace WeatherStation\Contracts;

abstract class Subject
{
    protected $displays = [];

    public abstract function registerDisplay(Display $display);

    public abstract function removeDisplay(Display $display);

    public function notifyDisplays()
    {
        foreach ($this->displays as $display) {
            $display->update($this);
        }
    }
}
