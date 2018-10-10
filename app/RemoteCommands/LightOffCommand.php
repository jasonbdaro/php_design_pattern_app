<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 2:48 PM
 */

namespace RemoteCommands;


use RemoteCommands\Contracts\Command;

/**
 * Class LightOffCommand
 * @package RemoteCommands
 */
class LightOffCommand implements Command
{
    private $light;

    /**
     * LightOffCommand constructor.
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        $this->light->off();
    }

    /**
     * @return mixed|void
     */
    public function undo()
    {
        $this->light->on();
    }
}