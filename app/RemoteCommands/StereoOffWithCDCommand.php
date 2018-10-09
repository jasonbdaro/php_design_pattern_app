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

    public function execute()
    {
        $this->stereo->off();
    }
}
