<?php

namespace naffiq\helpers;

use yii\base\Object;

class DateHelper extends Object
{
    /**
     * @var string $_formatDate формат возвращаемой даты, в случае если после создания прошло более 1 дня
     */
    private static $_formatDate = 'd.m.Y';

    /**
     * Возвращает время $time в UTC
     *
     * @var integer|string $time
     *
     * @return integer
     */
    public static function toTimestamp($time)
    {
        if (!is_int($time)) {
            return strtotime($time);
        } else {
            return $time;
        }
    }

    /**
     * Возвращает время прошедшее с $time
     *
     * @var $time integer|string
     *
     * @return string
     */
    public static function getTimeSince($time)
    {
        $time = self::toTimestamp($time);

        $minutesSince = (time() - $time) / 60;

        if ($minutesSince < 60) {
            // Если меньше часа
            return number_format($minutesSince) . ' ' . \Yii::t('frontend', 'мин. назад');
        } elseif ($minutesSince < 1440) {
            // Если меньше чем 1 день назад
            return number_format($minutesSince / 60) . ' ' . \Yii::t('frontend', 'час. назад');
        } elseif ($minutesSince < 2880) {
            // Вчера
            return \Yii::t('frontend', 'вчера');
        } else {
            // Остальное
            return \Yii::$app->formatter->asDate(time(), "php:j M Y");
        }
    }
}