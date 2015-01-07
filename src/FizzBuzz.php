<?php

class FizzBuzz
{
    private $valueText = array(3 => 'Fizz', 5 => 'Buzz', 7 => 'Bang');

    public function setValueText($valueText)
    {
        if (is_array($valueText))
            $this->valueText = $valueText;
    }

    public function process($data)
    {
        $value = '';
        if (self::isNotNumber($data, $this->valueText)) {
            foreach ($this->valueText as $k => $v)
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

    private static function isNotNumber($data, $valueText)
    {
        foreach ($valueText as $k => $v)
            if (self::is($data, $k))
                return true;
        return false;
    }
}