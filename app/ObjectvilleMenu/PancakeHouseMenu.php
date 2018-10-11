<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/11/2018
 * Time: 10:48 AM
 */

namespace ObjectvilleMenu;

use ObjectvilleMenu\Contracts\Menu;

/**
 * Class PancakeHouseMenu
 * @package ObjectvilleMenu
 */
class PancakeHouseMenu implements Menu
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
     * @return PancakeHouseIterator
     */
    public function getIterator()
    {
        return new PancakeHouseIterator($this->menuItems);
    }
}
