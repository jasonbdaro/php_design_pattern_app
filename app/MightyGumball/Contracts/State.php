<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/12/2018
 * Time: 3:14 PM
 */

namespace MightyGumball\Contracts;

/**
 * Interface State
 * @package MightyGumball\Contracts
 */
interface State
{
    /**
     * @return mixed
     */
    public function insertQuarter();

    /**
     * @return mixed
     */
    public function ejectQuarter();

    /**
     * @return mixed
     */
    public function turnCrank();

    /**
     * @return mixed
     */
    public function dispense();
}
