<?php

class FizzBuzz
{
    protected static $FIZZ_VALUE = 3;
    protected static $BUZZ_VALUE = 5;
    protected static $BANG_VALUE = 7;
    protected static $FIZZ_TEXT = 'Fizz';
    protected static $BUZZ_TEXT = 'Buzz';
    protected static $BANG_TEXT = 'Bang';

    public static function process($data)
    {
        $value = '';
        if (self::isNotNumber($data)) {
            if (self::is($data, self::$FIZZ_VALUE))
                $value .= self::$FIZZ_TEXT;
            if (self::is($data, self::$BUZZ_VALUE))
                $value .= self::$BUZZ_TEXT;
            if (self::is($data, self::$BANG_VALUE))
                $value .= self::$BANG_TEXT;
        } else {
            $value .= $data;
        }
        return $value;
    }

    private static function isDivisible($data, $by)
    {
        return ($data % $by === 0);
    }

    private static function contains($data, $value)
    {
        return false !== strpos(strval($data), strval($value));
    }

    private static function is($data, $value)
    {
        return self::isDivisible($data, $value) || self::contains($data, $value);
    }

    private static function isNotNumber($data)
    {
        return self::is($data, self::$FIZZ_VALUE) ||
               self::is($data, self::$BUZZ_VALUE) ||
               self::is($data, self::$BANG_VALUE);
    }
}