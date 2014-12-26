<?php

class FizzBuzz
{
    protected static $FIZZ_VALUE = 3;
    protected static $BUZZ_VALUE = 5;
    protected static $FIZZ_TEXT = 'Fizz';
    protected static $BUZZ_TEXT = 'Buzz';

    public static function process($data)
    {
        $value = '';
        if (self::isFizz($data) || self::isBuzz($data)) {
            if (self::isFizz($data))
                $value .= self::$FIZZ_TEXT;
            if (self::isBuzz($data))
                $value .= self::$BUZZ_TEXT;
        } else {
            $value .= $data;
        }
        return $value;
    }

    private static function isDivisible($data, $by)
    {
        return ($data % $by === 0);
    }

    private static function isFizz($data)
    {
        return self::isDivisible($data, self::$FIZZ_VALUE);
    }

    private static function isBuzz($data)
    {
        return self::isDivisible($data, self::$BUZZ_VALUE);
    }
}