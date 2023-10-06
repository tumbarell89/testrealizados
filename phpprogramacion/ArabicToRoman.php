<?php

namespace App;

class ArabicToRoman
{
    /**
     * Receive an arabic number and return a string with its roman counterpart
     *
     * @param int $arabicNumber Arabic number to be transformed (e.g. 121)
     *
     * @return string The roman number equivalent (e.g. CXXI)
     */
    public static function transform(int $arabicNumber): string
    {
        $romanNumber = '';
		$table = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 
                       'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9,   
                       'V'=>5, 'IV'=>4, 'I'=>1);
        while($arabicNumber > 0) 
        {
            foreach($table as $rom=>$arb) 
            {
                if($arabicNumber >= $arb)
                {
                    $arabicNumber -= $arb;
                    $romanNumber .= $rom;
                    break;
                }
            }
        }
        return $romanNumber;
    }
}