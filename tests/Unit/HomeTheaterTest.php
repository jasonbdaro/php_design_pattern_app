<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 3:40 PM
 */

namespace tests\Unit;


use HomeTheater\Amplifier;
use HomeTheater\CdPlayer;
use HomeTheater\DvdPlayer;
use HomeTheater\HomeTheater;
use HomeTheater\PopcornPopper;
use HomeTheater\Projector;
use HomeTheater\Screen;
use HomeTheater\TheaterLights;
use HomeTheater\Tuner;
use PHPUnit\Framework\TestCase;

class HomeTheaterTest extends TestCase
{
    public function testTheater()
    {
        $homeTheater = new HomeTheater(
          new Amplifier(),
          new Tuner(),
          new DvdPlayer(),
          new CdPlayer(),
          new Projector(),
          new Screen(),
          new TheaterLights(),
          new PopcornPopper()
        );

        $homeTheater->watchMovie('Breaking Bad Series');
        echo PHP_EOL;
        $homeTheater->endMovie();
    }
}
