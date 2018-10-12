<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/11/2018
 * Time: 9:56 PM
 */

namespace ObjectvilleMenuTree;


use ObjectvilleMenuTree\Contracts\MenuComponent;

/**
 * Class Waitress
 * @package ObjectvilleMenuTree
 */
class Waitress
{
    protected $menuComponent;

    /**
     * Waitress constructor.
     * @param MenuComponent $menuComponent
     */
    public function __construct(MenuComponent $menuComponent)
    {
        $this->menuComponent = $menuComponent;
    }

    /**
     * @throws \Exception
     */
    public function printMenu()
    {
        $this->menuComponent->printer();
    }
}
