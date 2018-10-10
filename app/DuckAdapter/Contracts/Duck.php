<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 10:50 AM
 */

namespace DuckAdapter\Contracts;

/**
 * Interface Duck
 * @package DuckAdapter\Contracts
 */
interface Duck
{
    /**
     * @return mixed
     */
    public function quack();

    /**
     * @return mixed
     */
    public function fly();
}
