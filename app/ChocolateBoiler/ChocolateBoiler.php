<?php
/**
 * Created by PhpStorm.
 * User: JASONBDARO
 * Date: 10/8/2018
 * Time: 12:58 PM
 */

namespace ChocolateBoiler;

/**
 * Class ChocolateBoiler
 * @package ChocolateBoiler
 */
class ChocolateBoiler
{
    private static $instance;
    private $empty;
    private $boiled;

    /**
     * ChocolateBoiler constructor.
     */
    private function __construct() {
        $this->empty = true;
        $this->boiled = false;
    }

    private function __clone() {}

    public function __wakeup()
    {
        throw new \Exception('Cannot un-serialize a singleton');
    }

    /**
     * @return ChocolateBoiler
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function fill()
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
        }
    }

    public function drain()
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            $this->empty = true;
        }
    }

    public function boil()
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            $this->boiled = true;
        }
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->empty;
    }

    /**
     * @return bool
     */
    public function isBoiled()
    {
        return $this->boiled;
    }
}
