<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 4:51 PM
 */

namespace RemoteCommands;


use RemoteCommands\Contracts\Command;

/**
 * Class NoCommand
 * @package app\RemoteCommands
 */
class NoCommand implements Command
{
    /**
     * @return mixed|void
     */
    public function execute()
    {
        echo 'No command' . PHP_EOL;
    }
}
