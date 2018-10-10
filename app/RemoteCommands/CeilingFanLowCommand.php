<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 8:49 AM
 */

namespace RemoteCommands;


use RemoteCommands\Contracts\Command;

/**
 * Class CeilingFanLowCommand
 * @package RemoteCommands
 */
class CeilingFanLowCommand implements Command
{
    use CeilingFanCommandsUndo;

    private $ceilingFan;
    private $prevSpeed;

    /**
     * CeilingFanLowCommand constructor.
     * @param CeilingFan $ceilingFan
     */
    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->low();
    }
}
