<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 4:37 PM
 */

namespace RemoteCommands;


use RemoteCommands\Contracts\Command;

/**
 * Class StereoOnWithCDCommand
 * @package RemoteCommands
 */
class StereoOnWithCDCommand implements Command
{
    private $stereo;

    /**
     * StereoOnWithCDCommand constructor.
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
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(11);
    }

    /**
     * @return mixed|void
     */
    public function undo()
    {
        $this->stereo->off();
    }
}
