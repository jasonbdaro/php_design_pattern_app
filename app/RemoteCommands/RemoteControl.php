<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 4:11 PM
 */

namespace RemoteControl;


use RemoteCommands\Contracts\Command;
use RemoteCommands\NoCommand;

/**
 * Class RemoteControl
 * @package RemoteControl
 */
class RemoteControl
{
    private $onCommands;
    private $offCommands;
    private $undoCommand;

    /**
     * RemoteControl constructor.
     */
    public function __construct()
    {
        $this->onCommands = [];
        $this->offCommands = [];

        $noCommand = new NoCommand();
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }
        $this->undoCommand = $noCommand;
    }

    /**
     * @param $slot
     * @param Command $onCommand
     * @param Command $offCommand
     */
    public function setCommand($slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    /**
     * @param $slot
     */
    public function onButtonWasPushed($slot)
    {
        if (null !== $this->onCommands[$slot]) {
            $this->onCommands[$slot]->execute();
            $this->undoCommand = $this->onCommands[$slot];
        }
    }

    /**
     * @param $slot
     */
    public function offButtonWasPushed($slot)
    {
        if (null !== $this->offCommands[$slot]) {
            $this->offCommands[$slot]->execute();
            $this->undoCommand = $this->offCommands[$slot];
        }
    }

    public function undoButtonWasPushed()
    {
        $this->undoCommand->undo();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $str = 'Remote Control' . PHP_EOL;
        for ($i = 0; $i < 7; $i++) {
            $str .= "[slot {$i}] " . get_class($this->onCommands[$i]) . ", " . get_class($this->offCommands[$i]) . PHP_EOL;
        }

        return $str;
    }
}
