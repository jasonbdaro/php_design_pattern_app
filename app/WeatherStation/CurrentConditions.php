<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/3/2018
 * Time: 5:08 PM
 */

namespace WeatherStation;

use WeatherStation\Contracts\Display;
use WeatherStation\Contracts\Subject;

class CurrentConditions implements Display
{
    public function update(Subject $subject)
    {
        // TODO: Implement update() method.
        echo 'Current Conditions:' . PHP_EOL;
        echo "Temperature: {$subject->getTemperature()}" . PHP_EOL;
        echo "Humidity: {$subject->getHumidity()}" . PHP_EOL;
        echo "Pressure: {$subject->getPressure()}" . PHP_EOL;
    }
}
