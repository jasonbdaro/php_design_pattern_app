<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 2:34 PM
 */

namespace RemoteCommands;

use RemoteCommands\Contracts\Command;

/**
 * Class LightOnCommand
 * @package RemoteCommands
 */
class LightOnCommand implements Command
{
    private $light;

    /**
     * LightOnCommand constructor.
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
        $this->light->on();
    }

    /**
     * @return mixed|void
     */
    public function undo()
    {
        $this->light->off();
    }
}
