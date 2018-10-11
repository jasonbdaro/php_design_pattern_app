<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/11/2018
 * Time: 9:20 PM
 */

namespace ObjectvilleMenuTree;


use ObjectvilleMenuTree\Contracts\MenuComponent;

/**
 * Class MenuItem
 * @package ObjectvilleMenuTree
 */
class MenuItem extends MenuComponent
{
    private $name;
    private $description;
    private $vegetarian;
    private $price;

    /**
     * MenuItem constructor.
     * @param $name
     * @param $description
     * @param $vegetarian
     * @param $price
     */
    public function __construct($name, $description, $vegetarian, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function isVegetarian()
    {
        return $this->vegetarian;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function print()
    {
        echo " " . $this->getName();
        if ($this->isVegetarian()) {
            echo "(v)";
        }
        echo ", " . $this->getPrice();
        echo "   -- " . $this->getDescription();
    }
}
