<?php
/**
 * Created by PhpStorm.
 * User: naffiq
 * Date: 6/14/17
 * Time: 11:14
 */

use naffiq\helpers\Number;

class NumberTest extends \PHPUnit\Framework\TestCase
{
    public function testToText()
    {
        $testValue = 10245;
        $this->assertEquals('ten thousand two hundred forty-five', Number::toText($testValue));
    }
}