<?php

namespace App\Helpers;

class General
{
    public static function replaceUrlParam($name) 
    {
        $punctuationRemoval = preg_replace("#[[:punct:]]#", "", $name);

        $newUrlParam = strtolower(str_replace(" ", "-", $punctuationRemoval));

        return $newUrlParam;
    }
}
