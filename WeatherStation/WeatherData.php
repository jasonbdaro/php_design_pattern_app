<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/3/2018
 * Time: 5:09 PM
 */

namespace WeatherStation;

class WeatherData
{
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
    }

    public function measurementChange()
    {
        return 'Measurement has changed!';
    }
}