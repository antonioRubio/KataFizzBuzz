<?php

class FizzBuzz
{
    protected static $VALUE_TEXT = array(3 => 'Fizz', 5 => 'Buzz', 7 => 'Bang');

    public static function setValueText($valueText)
    {
        static::$VALUE_TEXT = $valueText;
    }

    public static function process($data)
    {
        $value = '';
        if (self::isNotNumber($data)) {
            foreach (static::$VALUE_TEXT as $k => $v)
                if (self::is($data, $k))
                    $value .= $v;
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
        foreach (static::$VALUE_TEXT as $k => $v)
            if (self::is($data, $k))
                return true;
        return false;
    }
}