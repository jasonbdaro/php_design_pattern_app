<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 9:14 AM
 */

namespace RemoteCommands;


use RemoteCommands\Contracts\Command;

/**
 * Class MacroCommand
 * @package RemoteCommands
 */
class MacroCommand implements Command
{
    private $commands;

    /**
     * MacroCommand constructor.
     * @param array $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        for ($i = 0; $i < count($this->commands); $i++) {
            $this->commands[$i]->execute();
        }
    }

    /**
     * @return mixed|void
     */
    public function undo()
    {
        for ($i = 0; $i < count($this->commands); $i++) {
            $this->commands[$i]->undo();
        }
    }
}
