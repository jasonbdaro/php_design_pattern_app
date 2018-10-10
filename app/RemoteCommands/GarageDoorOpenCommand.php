<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 3:04 PM
 */

namespace RemoteCommands;

use RemoteCommands\Contracts\Command;

/**
 * Class GarageDoorOpenCommand
 * @package RemoteCommands
 */
class GarageDoorOpenCommand implements Command
{
    private $garageDoor;

    /**
     * GarageDoorOpenCommand constructor.
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
        $this->garageDoor->up();
    }

    /**
     * @return mixed|void
     */
    public function undo()
    {
        $this->garageDoor->down();
    }
}
