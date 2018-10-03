<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/3/2018
 * Time: 5:09 PM
 */

namespace WeatherStation;

use WeatherStation\Contracts\Display;
use WeatherStation\Contracts\Subject;

class WeatherData extends Subject
{
    private $temperature;
    private $humidity;
    private $pressure;

    public function registerDisplay(Display $display)
    {
        // TODO: Implement registerDisplay() method.
        $this->displays[] = $display;
    }

    public function removeDisplay(Display $display)
    {
        // TODO: Implement removeDisplay() method.
        if (false !== ($key = array_search($display, $this->displays, true))) {
            unset($this->displays[$key]);
        }
    }

    public function setMeasurement($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->notifyDisplays();
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }
}
