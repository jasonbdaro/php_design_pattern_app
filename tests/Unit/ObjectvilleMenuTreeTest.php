<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/11/2018
 * Time: 9:58 PM
 */

namespace tests\Unit;


use ObjectvilleMenuTree\Menu;
use ObjectvilleMenuTree\MenuItem;
use ObjectvilleMenuTree\Waitress;
use PHPUnit\Framework\TestCase;

class ObjectvilleMenuTreeTest extends TestCase
{
    public function testTree()
    {
        $pancakeHouseMenu = new Menu("Pancake House Menu", "Breakfast");
        $dinerMenu = new Menu("Diner Menu", "Lunch");
        $cafeMenu = new Menu("Cafe Menu", "Dinner");
        $dessertMenu = new Menu("Dessert Menu", "Dessert of course!");

        $allMenus = new Menu("All Menus", "All menus combined");
        $allMenus->add($pancakeHouseMenu);
        $allMenus->add($dinerMenu);
        $allMenus->add($cafeMenu);

        $dinerMenu->add(new MenuItem(
            "Pasta",
            "Spaghetti with Marinara Sauce, and a slice of sordough bread.",
            true,
            3.89
        ));
        $dinerMenu->add($dessertMenu);
        $dessertMenu->add(new MenuItem(
            "Apple Pie",
            "Apple pie with a flakey crust, topped with vanilla icecream",
            true,
            1.59
        ));

        $waitress = new Waitress($allMenus);
        $waitress->printMenu();
    }
}
