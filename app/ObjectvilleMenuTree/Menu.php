<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/11/2018
 * Time: 9:30 PM
 */

namespace ObjectvilleMenuTree;


use ObjectvilleMenu\DinerMenuIterator;
use ObjectvilleMenuTree\Contracts\MenuComponent;

/**
 * Class Menu
 * @package ObjectvilleMenuTree
 */
class Menu extends MenuComponent
{
    private $menuComponents = [];
    private $name;
    private $description;

    /**
     * Menu constructor.
     * @param $name
     * @param $description
     */
    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * @param MenuComponent $menuComponent
     */
    public function add(MenuComponent $menuComponent)
    {
        $this->menuComponents[] = $menuComponent;
    }

    /**
     * @param MenuComponent $menuComponent
     */
    public function remove(MenuComponent $menuComponent)
    {
        $this->menuComponents = array_filter($this->menuComponents, function ($menuItem) use ($menuComponent) {
             return $menuItem == $menuComponent;
        });
    }

    /**
     * @param $id
     * @return MenuComponent
     */
    public function getChild($id)
    {
        return $this->menuComponents[$id];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return DinerMenuIterator
     */
    public function getIterator()
    {
        return new DinerMenuIterator($this->menuComponents);
    }

    /**
     * @throws \Exception
     */
    public function printer()
    {
        echo PHP_EOL . $this->getName();
        echo ", " . $this->getDescription() . PHP_EOL;
        echo "----------------------------------" . PHP_EOL;

        $iterator = $this->getIterator();
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            $menuItem->printer();
        }
    }
}
