<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/3/2018
 * Time: 8:38 PM
 */

namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use WeatherStation\CurrentConditions;
use WeatherStation\StatisticsDisplay;
use WeatherStation\WeatherData;


class WeatherStationTest extends TestCase
{
    public function setUp()
    {
        $this->weatherData = new WeatherData();
        $this->currentConditions = new CurrentConditions();
        $this->statisticsDisplay = new StatisticsDisplay();
    }

    public function testAddObserver()
    {
        $this->weatherData->registerDisplay($this->currentConditions);
        $this->weatherData->registerDisplay($this->statisticsDisplay);
        print_r($this->weatherData->getObservers());
    }

    public function testRemoveObserver()
    {
        $this->weatherData->registerDisplay($this->currentConditions);
        $this->weatherData->registerDisplay($this->statisticsDisplay);
        $this->weatherData->removeDisplay($this->currentConditions);
        $this->weatherData->setMeasurement(1, 1, 1);
        print_r($this->weatherData->getObservers());
    }
}
