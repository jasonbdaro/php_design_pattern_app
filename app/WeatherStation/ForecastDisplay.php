<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/4/2018
 * Time: 8:33 AM
 */

namespace WeatherStation;


use WeatherStation\Contracts\Display;
use WeatherStation\Contracts\Subject;

class ForecastDisplay implements Display
{
    public function update(Subject $subject)
    {
        // TODO: Implement update() method.
        echo 'Weather Forecast:' . PHP_EOL;
        echo "Temperature: {$subject->getTemperature()}" . PHP_EOL;
        echo "Humidity: {$subject->getHumidity()}" . PHP_EOL;
        echo "Pressure: {$subject->getPressure()}" . PHP_EOL;
    }
}