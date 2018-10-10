<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 11:00 AM
 */

namespace DuckAdapter;


use DuckAdapter\Contracts\Duck;
use DuckAdapter\Contracts\Turkey;

/**
 * Class DuckAdapter
 * @package DuckAdapter
 */
class DuckAdapter implements Turkey
{
    private $duck;

    /**
     * DuckAdapter constructor.
     * @param Duck $duck
     */
    public function __construct(Duck $duck)
    {
        $this->duck = $duck;
    }

    /**
     * @return mixed|void
     */
    public function gobble()
    {
        $this->duck->quack();
    }

    /**
     * @return mixed|void
     */
    public function fly()
    {
        $this->duck->fly();
        echo "(I am a duck that flies in a short distance)";
    }
}
