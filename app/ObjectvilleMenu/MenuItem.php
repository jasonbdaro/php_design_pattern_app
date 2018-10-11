<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/11/2018
 * Time: 8:59 AM
 */

namespace ObjectvilleMenu;

/**
 * Class MenuItem
 * @package ObjectvilleMenu
 */
class MenuItem
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
}
