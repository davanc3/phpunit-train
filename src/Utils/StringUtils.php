<?php

namespace Php\Package\Utils;

class StringUtils
{
    /**
     * Функция, которая реалезует разворот строки
     *
     * @param string $str
     * @return string
     */
    public static function reverseString(string $str): string
    {
        $newStr = [];
        $len = mb_strlen($str, 'UTF-8');
        for ($i = 0; $i < $len; $i++) {
            $newStr[] = mb_substr($str, $i, 1, 'UTF-8');
        }

        return implode(array_reverse($newStr));
    }
}