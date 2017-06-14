<?php

namespace naffiq\helpers;

/**
 * Class Number
 *
 */
class Number {
    /**
     * @param int $number
     *
     * @return string
     */
    public static function toText($number)
    {
        return \Yii::t('app', '{n,spellout,%spellout-numbering}', [
            'n' => $number
        ]);
    }
}
