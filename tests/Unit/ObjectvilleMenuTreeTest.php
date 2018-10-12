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
        $menu1 = new Menu("Menu 1", "Breakfast:");
        $menu1->add(new MenuItem("item 1", "Description 1", 1, "$1.00"));
        $menu1->add(new MenuItem("item 2", "Description 2", 0, "$1.10"));
        $menu1->add(new MenuItem("item 3", "Description 3", 1, "$1.20"));
        $menu1->add(new MenuItem("item 4", "Description 4", 0, "$1.30"));
        $menu1->add(new MenuItem("item 5", "Description 5", 1, "$1.40"));

        $menu2 = new Menu("Menu 2", "Lunch:");
        $menu2->add(new MenuItem("item 1", "Description 1", 1, "$2.00"));
        $menu2->add(new MenuItem("item 2", "Description 2", 1, "$2.10"));
        $menu2->add(new MenuItem("item 3", "Description 3", 0, "$2.20"));
        $menu2->add(new MenuItem("item 4", "Description 4", 1, "$2.30"));
        $menu2->add(new MenuItem("item 5", "Description 5", 0, "$2.40"));

        $menu3 = new Menu("Menu 3", "Dinner:");
        $menu3->add(new MenuItem("item 1", "Description 1", 1, "$2.00"));
        $menu3->add(new MenuItem("item 2", "Description 2", 0, "$2.10"));
        $menu3->add(new MenuItem("item 3", "Description 3", 1, "$2.20"));
        $menu3->add(new MenuItem("item 4", "Description 4", 0, "$2.30"));
        $menu3->add(new MenuItem("item 5", "Description 5", 1, "$2.40"));

        $menu3submenu = new Menu("Menu 3 (submenu)", "Dessert");
        $menu3submenu->add(new MenuItem("item 1", "Description 1", 1, "$2.00"));
        $menu3submenu->add(new MenuItem("item 2", "Description 2", 0, "$2.10"));
        $menu3submenu->add(new MenuItem("item 3", "Description 3", 0, "$2.20"));
        $menu3submenu->add(new MenuItem("item 4", "Description 4", 1, "$2.30"));
        $menu3submenu->add(new MenuItem("item 5", "Description 5", 1, "$2.40"));

        $menu3->add($menu3submenu);

        $allMenus = new Menu("Objectville Diner", "Welcome!");
        $allMenus->add($menu1);
        $allMenus->add($menu2);
        $allMenus->add($menu3);

        $waitress = new Waitress($allMenus);
        $waitress->printMenu();
    }
}
