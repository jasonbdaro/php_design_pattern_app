<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 10:54 AM
 */

namespace DuckAdapter;


use DuckAdapter\Contracts\Duck;
use DuckAdapter\Contracts\Turkey;

/**
 * Class TurkeyAdapter
 * @package DuckAdapter
 */
class TurkeyAdapter implements Duck
{
    private $turkey;

    /**
     * TurkeyAdapter constructor.
     * @param Turkey $turkey
     */
    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    /**
     * @return mixed|void
     */
    public function quack()
    {
        $this->turkey->gobble();
    }

    /**
     * @return mixed|void
     */
    public function fly()
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
