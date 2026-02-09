<?php

class Validator
{
    public static function string($value, $min = 1, $max = PHP_INT_MAX)
    {
        if (!is_string($value)) {
            return false;
        }

        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function number($value, $min = 0, $max = PHP_INT_MAX)
    {
        if (!is_string($value) && !is_int($value)) {
            return false;
        }

        $value = trim((string) $value);

        if (!ctype_digit($value)) {
            return false;
        }

        $number = (int) $value;

        return $number >= $min && $number <= $max;
    }
}
