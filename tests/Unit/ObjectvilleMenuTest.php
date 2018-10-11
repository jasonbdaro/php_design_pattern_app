<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/11/2018
 * Time: 9:18 AM
 */

namespace tests\Unit;


use ObjectvilleMenu\DinerMenu;
use ObjectvilleMenu\PancakeHouseMenu;
use ObjectvilleMenu\Waitress;
use PHPUnit\Framework\TestCase;

/**
 * Class ObjectvilleMenuTest
 * @package tests\Unit
 */
class ObjectvilleMenuTest extends TestCase
{
    public function testDinerMenu()
    {
        $pancakeHouseMenu = new PancakeHouseMenu();
        $pancakeHouseMenu->addItem(
            "Vegetarian BLT",
            "(Faking) Bacon with lettuce & tomato on whole wheat",
            true,
            2.99
        );
        $pancakeHouseMenu->addItem(
            "BLT",
            "Bacon with lettuce & tomato on whole wheat",
            false,
            2.99
        );
        $pancakeHouseMenu->addItem(
            "Soup of the day",
            "Soup of the day, with a side of potato salad",
            false,
            3.29
        );
        $pancakeHouseMenu->addItem(
            "Hotdog",
            "A hotdog, with saurkraut, relish, onions, topped with cheese",
            false,
            3.05
        );

        $dinerMenu = new DinerMenu();
        $dinerMenu->addItem(
            "Vegetarian BLT",
            "(Faking) Bacon with lettuce & tomato on whole wheat",
            true,
            2.99
        );
        $dinerMenu->addItem(
            "BLT",
            "Bacon with lettuce & tomato on whole wheat",
            false,
            2.99
        );
        $dinerMenu->addItem(
            "Soup of the day",
            "Soup of the day, with a side of potato salad",
            false,
            3.29
        );
        $dinerMenu->addItem(
            "Hotdog",
            "A hotdog, with saurkraut, relish, onions, topped with cheese",
            false,
            3.05
        );

        $waitress = new Waitress($pancakeHouseMenu, $dinerMenu);
        $waitress->printMenu();
    }
}
