<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 10:53 AM
 */

namespace DuckAdapter;


use DuckAdapter\Contracts\Turkey;

/**
 * Class WildTurkey
 * @package DuckAdapter
 */
class WildTurkey implements Turkey
{
    /**
     * @return mixed|void
     */
    public function gobble()
    {
        echo 'Gobble gobble' . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function fly()
    {
        echo 'Fly with short distance' . PHP_EOL;
    }
}
