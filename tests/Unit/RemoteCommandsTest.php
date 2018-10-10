<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 2:38 PM
 */

namespace tests\Unit;

use RemoteCommands\CeilingFan;
use RemoteCommands\CeilingFanHighCommand;
use RemoteCommands\CeilingFanLowCommand;
use RemoteCommands\CeilingFanMediumCommand;
use RemoteCommands\CeilingFanOffCommand;
use RemoteCommands\GarageDoor;
use RemoteCommands\GarageDoorCloseCommand;
use RemoteCommands\GarageDoorOpenCommand;
use RemoteCommands\LightOffCommand;
use PHPUnit\Framework\TestCase;
use RemoteCommands\Light;
use RemoteCommands\LightOnCommand;
//use RemoteCommands\SimpleRemoteControl;
use RemoteCommands\MacroCommand;
use RemoteCommands\Stereo;
use RemoteCommands\StereoOffWithCDCommand;
use RemoteCommands\StereoOnWithCDCommand;
use RemoteControl\RemoteControl;

/**
 * Class RemoteCommandsTest
 * @package tests\Unit
 */
class RemoteCommandsTest extends TestCase
{
    public function testCommands()
    {
        $remote = new RemoteControl();

        $light = new Light();
        $lightOnCommand = new LightOnCommand($light);
        $lightOffCommand = new LightOffCommand($light);

        $garageDoor = new GarageDoor();
        $garageDoorOpenCommand = new GarageDoorOpenCommand($garageDoor);
        $garageDoorCloseCommand = new GarageDoorCloseCommand($garageDoor);

        $stereo = new Stereo();
        $stereoOnWithCDCommand = new StereoOnWithCDCommand($stereo);
        $stereoOffWithCDCommand = new StereoOffWithCDCommand($stereo);

        $ceilingFan = new CeilingFan();
        $ceilingFanHighCommand = new CeilingFanHighCommand($ceilingFan);
        $ceilingFanMediumCommand = new CeilingFanMediumCommand($ceilingFan);
        $ceilingFanLowCommand = new CeilingFanLowCommand($ceilingFan);
        $ceilingFanOffCommand = new CeilingFanOffCommand($ceilingFan);

        $partyOnCommands = new MacroCommand([$lightOnCommand, $stereoOnWithCDCommand, $garageDoorOpenCommand, $ceilingFanHighCommand]);
        $partyOffCommands = new MacroCommand([$lightOffCommand, $stereoOffWithCDCommand, $garageDoorCloseCommand, $ceilingFanOffCommand]);

        $remote->setCommand(0, $lightOnCommand, $lightOffCommand);
        $remote->setCommand(1, $garageDoorOpenCommand, $garageDoorCloseCommand);
        $remote->setCommand(2, $stereoOnWithCDCommand, $stereoOffWithCDCommand);
        $remote->setCommand(3, $ceilingFanHighCommand, $ceilingFanOffCommand);
        $remote->setCommand(4, $ceilingFanMediumCommand, $ceilingFanOffCommand);
        $remote->setCommand(5, $ceilingFanLowCommand, $ceilingFanOffCommand);
        $remote->setCommand(6, $partyOnCommands, $partyOffCommands);

        $remote->offButtonWasPushed(0);
        $remote->undoButtonWasPushed();
        $remote->onButtonWasPushed(1);
        $remote->undoButtonWasPushed();
        $remote->onButtonWasPushed(2);
        $remote->undoButtonWasPushed();
        $remote->onButtonWasPushed(3);
        $remote->onButtonWasPushed(4);
        $remote->onButtonWasPushed(5);
        $remote->onButtonWasPushed(3);
        $remote->offButtonWasPushed(3);
        $remote->undoButtonWasPushed();
        $remote->onButtonWasPushed(6);
        $remote->offButtonWasPushed(6);
        echo $remote;
    }
}
