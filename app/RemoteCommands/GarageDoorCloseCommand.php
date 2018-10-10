<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 4:46 PM
 */

namespace RemoteCommands;


use RemoteCommands\Contracts\Command;

/**
 * Class GarageDoorCloseCommand
 * @package RemoteCommands
 */
class GarageDoorCloseCommand implements Command
{
    private $garageDoor;

    /**
     * GarageDoorCloseCommand constructor.
     * @param GarageDoor $garageDoor
     */
    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        $this->garageDoor->down();
    }

    /**
     * @return mixed|void
     */
    public function undo()
    {
        $this->garageDoor->up();
    }
}
