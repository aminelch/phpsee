<?php

/*
 * This file is part of the PHPsee package.
 *
 * (c) Amine L'ch <aminelch95@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace PhpSee\Helpers;

class Str
{

/**
 * Generate a random string 
 *
 * @param integer $length
 * @param boolean $symbol make use of symbols 
 * @param boolean $upper make use Upper case chars 
 * @return string 
 */
    public static function randomString(int $length = 20, bool $symbol = true, bool $upper = true) :string
    {

        $a_pattern = 'abcdefghijklmnopqrstuvwxyz';
        $a_maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $a_symb = "#{[|``\^@]}-_*/!,;";

        if ($symbol) $a_pattern .= $a_symb;
        if ($upper) $a_pattern .= $a_maj;

        return str_shuffle(substr($a_pattern, 0, $length  - 1));
    }
}
