<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 2:36 PM
 */

namespace RemoteCommands;



use RemoteCommands\Contracts\Command;

/**
 * Class SimpleRemoteControl
 * @package app\RemoteCommands
 */
class SimpleRemoteControl
{
    private $slot;

    /**
     * @param Command $command
     */
    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        $this->slot->execute();
    }
}
