<?php

namespace App\Helpers;

class Langs
{

    const LOCALES = ['en', 'ru', 'pl', 'no', 'ua'];


    // Return locale or the empty string
    public static function getLocale():string
    {
        $locale = request()->segment(1, '');
        dump($locale);

        if($locale){
            if (in_array($locale, self::LOCALES)){
                return $locale;
            }
        }
        return '';
    }



}
