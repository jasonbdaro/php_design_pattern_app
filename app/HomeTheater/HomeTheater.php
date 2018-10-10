<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 3:06 PM
 */

namespace HomeTheater;

/**
 * Class HomeTheater
 * @package HomeTheater
 */
class HomeTheater
{
    private $amplifier;
    private $tuner;
    private $dvd;
    private $cd;
    private $projector;
    private $screen;
    private $lights;
    private $popper;

    /**
     * HomeTheater constructor.
     * @param Amplifier $amplifier
     * @param Tuner $tuner
     * @param DvdPlayer $dvd
     * @param CdPlayer $cd
     * @param Projector $projector
     * @param Screen $screen
     * @param TheaterLights $lights
     * @param PopcornPopper $popper
     */
    public function __construct(
        Amplifier $amplifier,
        Tuner $tuner,
        DvdPlayer $dvd,
        CdPlayer $cd,
        Projector $projector,
        Screen $screen,
        TheaterLights $lights,
        PopcornPopper $popper
    )
    {
        $this->amplifier = $amplifier;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->lights = $lights;
        $this->screen = $screen;
        $this->popper = $popper;
    }

    /**
     * @param $movie
     */
    public function watchMovie($movie)
    {
        echo 'Get ready to watch a movie' . PHP_EOL;
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amplifier->on();
        $this->amplifier->setDvd('DVD');
        $this->amplifier->setSurroundSound();
        $this->amplifier->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);
    }

    public function endMovie()
    {
        echo 'Shutting movie theater down' . PHP_EOL;
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amplifier->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }
}
