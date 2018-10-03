<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/3/2018
 * Time: 4:43 PM
 */

namespace WeatherStation\Contracts;

interface Display
{
    public function update(Subject $subject);
}
