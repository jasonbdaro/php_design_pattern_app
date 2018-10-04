<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/4/2018
 * Time: 8:46 AM
 */

namespace WeatherStation;


use WeatherStation\Contracts\Display;
use WeatherStation\Contracts\Subject;

class HeatIndex implements Display
{
    public function update(Subject $subject)
    {
        // TODO: Implement update() method.
        // This is not the formula for computing heat index. Use for testing only.
        $headIndex = 16.923 + 1.85212 * pow(10, -1) * $subject->getTemperature();
        echo "Heat Index: {$headIndex}" . PHP_EOL;
    }
}