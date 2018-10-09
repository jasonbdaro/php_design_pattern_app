<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 2:38 PM
 */

namespace tests\Unit;


use RemoteCommands\GarageDoor;
use RemoteCommands\GarageDoorCloseCommand;
use RemoteCommands\GarageDoorOpenCommand;
use RemoteCommands\LightOffCommand;
use PHPUnit\Framework\TestCase;
use RemoteCommands\Light;
use RemoteCommands\LightOnCommand;
//use RemoteCommands\SimpleRemoteControl;
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

        $remote->setCommand(0, $lightOnCommand, $lightOffCommand);
        $remote->setCommand(1, $garageDoorOpenCommand, $garageDoorCloseCommand);
        $remote->setCommand(2, $stereoOnWithCDCommand, $stereoOffWithCDCommand);

        $remote->offButtonWasPushed(0);
        $remote->onButtonWasPushed(1);
        $remote->onButtonWasPushed(2);
        echo $remote;
    }
}
