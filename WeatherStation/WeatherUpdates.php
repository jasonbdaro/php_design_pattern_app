<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/3/2018
 * Time: 4:46 PM
 */

namespace WeatherStation;

use WeatherStation\Contracts\Display;
use WeatherStation\Contracts\Subject;

class WeatherUpdates extends Subject
{
    protected $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
    }

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
}
