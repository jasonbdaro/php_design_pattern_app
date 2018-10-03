<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/3/2018
 * Time: 8:35 PM
 */

namespace WeatherStation;

use WeatherStation\Contracts\Display;
use WeatherStation\Contracts\Subject;

class StatisticsDisplay implements Display
{
    public function update(Subject $subject)
    {
        // TODO: Implement update() method.
        echo 'Statistics Display:' . PHP_EOL;
        echo "Temperature: {$subject->getTemperature()}" . PHP_EOL;
        echo "Humidity: {$subject->getHumidity()}" . PHP_EOL;
        echo "Pressure: {$subject->getPressure()}" . PHP_EOL;
    }
}
