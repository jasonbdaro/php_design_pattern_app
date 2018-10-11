<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/11/2018
 * Time: 9:50 AM
 */

namespace ObjectvilleMenu;

use ObjectvilleMenu\Contracts\Iterator;
use ObjectvilleMenu\Contracts\Menu;

/**
 * Class Waitress
 * @package ObjectvilleMenu
 */
class Waitress
{
    private $pancakeHouseMenu;
    private $dinerMenu;

    /**
     * Waitress constructor.
     * @param Menu $pancakeHouseMenu
     * @param Menu $dinerMenu
     */
    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu)
    {
        $this->dinerMenu = $dinerMenu;
        $this->pancakeHouseMenu = $pancakeHouseMenu;
    }

    /**
     *
     */
    public function printMenu()
    {
        echo "Breakfast Menu:" . PHP_EOL;
        $this->printer($this->pancakeHouseMenu->getIterator());
        echo "Lunch Menu:" . PHP_EOL;
        $this->printer($this->dinerMenu->getIterator());
    }

    /**
     * @param Iterator $iterator
     */
    private function printer(Iterator $iterator)
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            echo "Name: {$menuItem->getName()}" . PHP_EOL;
            echo "Description: {$menuItem->getDescription()}" . PHP_EOL;
            echo "Vegetarian: {$menuItem->isVegetarian()}" . PHP_EOL;
            echo "Price: {$menuItem->getPrice()}" . PHP_EOL;
            echo PHP_EOL;
        }
    }

}
