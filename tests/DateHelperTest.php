<?php

/**
 * Created by PhpStorm.
 * User: naffiq
 * Date: 6/14/17
 * Time: 14:30
 */

use naffiq\helpers\DateHelper;

class DateHelperTest extends \PHPUnit\Framework\TestCase
{
    public function testToTimesStamp()
    {
        $time = time();
        $date = date('Y-m-d H:i:s', $time);

        $this->assertEquals($time, DateHelper::toTimestamp($date));
        $this->assertEquals($time, DateHelper::toTimestamp($time));
    }

    public function testJustNow()
    {
        $time = date('Y-m-d H:i:s', strtotime('-5 sec', time()));

        $this->assertEquals('только что', DateHelper::getTimeSince($time));
    }

    public function testFiveMinutesAgo()
    {
        $time = date('Y-m-d H:i:s', strtotime('-5 min', time()));

        $this->assertEquals('5 мин. назад', DateHelper::getTimeSince($time));
    }

    public function testFiveHoursAgo()
    {
        $time = date('Y-m-d H:i:s', strtotime('-5 hours', time()));

        $this->assertEquals('5 час. назад', DateHelper::getTimeSince($time));
    }

    public function testYesterday()
    {
        $time = date('Y-m-d H:i:s', strtotime('-1 day', time()));

        $this->assertEquals('вчера', DateHelper::getTimeSince($time));
    }

    public function testTooLongAgo()
    {
        $time = '19-06-1993 00:00:00';

        $this->assertEquals(\Yii::$app->formatter->asDate($time, "php:j M Y"), DateHelper::getTimeSince($time));
    }
}