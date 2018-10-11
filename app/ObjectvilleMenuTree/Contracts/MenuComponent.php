<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/11/2018
 * Time: 9:17 PM
 */

namespace ObjectvilleMenuTree\Contracts;

/**
 * Class MenuComponent
 * @package ObjectvilleMenuTree\Contracts
 */
abstract class MenuComponent
{
    /**
     * @param MenuComponent $menuComponent
     * @throws \Exception
     */
    public function add(MenuComponent $menuComponent)
    {
        throw new \Exception("Unsupported operation exception.");
    }

    /**
     * @param MenuComponent $menuComponent
     * @throws \Exception
     */
    public function remove(MenuComponent $menuComponent)
    {
        throw new \Exception("Unsupported operation exception.");
    }

    /**
     * @param $id
     * @throws \Exception
     */
    public function getChild($id)
    {
        throw new \Exception("Unsupported operation exception.");
    }

    /**
     * @throws \Exception
     */
    public function getName()
    {
        throw new \Exception("Unsupported operation exception.");
    }

    /**
     * @throws \Exception
     */
    public function getDescription()
    {
        throw new \Exception("Unsupported operation exception.");        
    }

    /**
     * @throws \Exception
     */
    public function getPrice()
    {
        throw new \Exception("Unsupported operation exception.");
    }

    /**
     * @throws \Exception
     */
    public function isVegetarian()
    {
        throw new \Exception("Unsupported operation exception.");
    }

    /**
     * @throws \Exception
     */
    public function print()
    {
        throw new \Exception("Unsupported operation exception.");
    }
}
