<?php

namespace App\Services;

use NumberFormatter;

class NumberConverterService
{
    public function convertToWords($number)
    {
        if ($this->isRomanNumeral($number)){
            $intNumber = $this->romanToInt($number);
        } else {
            $intNumber = intval($number);
        }

        $numberToWord = new NumberFormatter('en', NumberFormatter::SPELLOUT);
        return $numberToWord->format(intval($intNumber));
    }

    public function isValidInput($input)
    {
        return is_numeric($input) || $this->isRomanNumeral($input);
    }

    private function isRomanNumeral($input)
    {
        return preg_match('/^[IVXLCDM]+$/i', $input);
    }

    private function romanToInt($roman)
    {
        $roman = strtoupper($roman);
        $romans = [
            'M' => 1000,
            'D' => 500,
            'C' => 100,
            'L' => 50,
            'X' => 10,
            'V' => 5,
            'I' => 1
        ];

        $number = 0;
        $previousValue = 0;

        for ($i = strlen($roman) - 1; $i >= 0; $i--) {
            $currentValue = $romans[$roman[$i]];
            if ($currentValue < $previousValue) {
                $number -= $currentValue;
            } else {
                $number += $currentValue;
            }
            $previousValue = $currentValue;
        }
        return $number;
    }
}
