<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 8:45 AM
 */

namespace RemoteCommands;

/**
 * Trait CeilingFanCommandsUndo
 * @package RemoteCommands
 */
trait CeilingFanCommandsUndo
{
    /**
     * @return mixed|void
     */
    public function undo()
    {
        if ($this->prevSpeed == CeilingFan::HIGH) {
            $this->ceilingFan->high();
        } else if ($this->prevSpeed == CeilingFan::MEDIUM) {
            $this->ceilingFan->medium();
        } else if ($this->prevSpeed == CeilingFan::LOW) {
            $this->ceilingFan->low();
        } else if ($this->prevSpeed == CeilingFan::OFF) {
            $this->ceilingFan->off();
        }
    }
}