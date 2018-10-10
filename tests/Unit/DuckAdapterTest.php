<?php
/**
 * Created by PhpStorm.
 * User: j.daro
 * Date: 10/10/2018
 * Time: 10:56 AM
 */

namespace tests\Unit;


use DuckAdapter\DuckAdapter;
use DuckAdapter\MallardDuck;
use DuckAdapter\TurkeyAdapter;
use DuckAdapter\WildTurkey;
use PHPUnit\Framework\TestCase;

class DuckAdapterTest extends TestCase
{
    public function testAdapter()
    {
        $mallardDuck = new MallardDuck();
        $wildTurkey = new WildTurkey();
        $turkeyAdapter = new TurkeyAdapter($wildTurkey);

        $mallardDuck->quack();
        $mallardDuck->fly();
        echo PHP_EOL;
        $turkeyAdapter->quack();
        $turkeyAdapter->fly();
        echo PHP_EOL;
        $duckAdapter = new DuckAdapter($mallardDuck);
        $duckAdapter->gobble();
        $duckAdapter->fly();
    }
}
