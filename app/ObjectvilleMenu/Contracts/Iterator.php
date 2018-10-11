<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/11/2018
 * Time: 8:53 AM
 */

namespace ObjectvilleMenu\Contracts;

/**
 * Interface Iterator
 * @package ObjectvilleMenu\Contracts
 */
interface Iterator
{
    /**
     * @return mixed
     */
    public function next();

    /**
     * @return mixed
     */
    public function hasNext();

    /**
     * @return mixed
     */
    public function remove();
}
