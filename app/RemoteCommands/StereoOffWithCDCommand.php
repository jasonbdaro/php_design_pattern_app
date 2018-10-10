<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 4:47 PM
 */

namespace RemoteCommands;


use RemoteCommands\Contracts\Command;

/**
 * Class StereoOffWithCDCommand
 * @package RemoteCommands
 */
class StereoOffWithCDCommand implements Command
{
    private $stereo;

    /**
     * StereoOffWithCDCommand constructor.
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        $this->stereo->off();
    }

    /**
     * @return mixed|void
     */
    public function undo()
    {
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(11);
    }
}
