<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/11/2018
 * Time: 10:50 AM
 */

namespace ObjectvilleMenu;


use ObjectvilleMenu\Contracts\Iterator;

/**
 * Class PancakeHouseIterator
 * @package ObjectvilleMenu
 */
class PancakeHouseIterator implements Iterator
{
    private $menuItems;
    private $position = 0;

    /**
     * PancakeHouseIterator constructor.
     * @param array $menuItems
     */
    public function __construct(array $menuItems)
    {
        $this->menuItems = $menuItems;
    }

    /**
     * @return mixed
     */
    public function next()
    {
        $menuItem = $this->menuItems[$this->position];
        $this->position++;
        return $menuItem;
    }

    /**
     * @return bool|mixed
     */
    public function hasNext()
    {
        return count($this->menuItems) > $this->position;
    }

    /**
     * @return mixed|void
     */
    public function remove()
    {
        unset($this->menuItems[$this->position - 1]);
    }
}
