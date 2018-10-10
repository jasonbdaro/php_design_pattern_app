<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/9/2018
 * Time: 2:32 PM
 */

namespace RemoteCommands\Contracts;

/**
 * Interface Command
 * @package RemoteCommands
 */
interface Command
{
    /**
     * @return mixed
     */
    public function execute();

    /**
     * @return mixed
     */
    public function undo();
}
