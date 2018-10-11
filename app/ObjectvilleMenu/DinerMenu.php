<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/11/2018
 * Time: 8:55 AM
 */

namespace ObjectvilleMenu;

use ObjectvilleMenu\Contracts\Menu;

/**
 * Class DinerMenu
 * @package ObjectvilleMenu
 */
class DinerMenu implements Menu
{
    private $menuItems;

    /**
     * @param $name
     * @param $description
     * @param $vegetarian
     * @param $price
     */
    public function addItem($name, $description, $vegetarian, $price)
    {
        $this->menuItems[] = new MenuItem($name, $description, $vegetarian, $price);
    }

    /**
     * @return DinerMenuIterator
     */
    public function getIterator()
    {
        return new DinerMenuIterator($this->menuItems);
    }
}
