<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/11/2018
 * Time: 11:21 AM
 */

namespace ObjectvilleMenu\Contracts;

/**
 * Interface Menu
 * @package ObjectvilleMenu\Contracts
 */
interface Menu
{
    /**
     * @return mixed
     */
    public function getIterator();
}