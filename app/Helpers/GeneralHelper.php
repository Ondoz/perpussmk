<?php

namespace App\Helpers;

class GeneralHelper
{
    public static function menuActive($url)
    {
        $active = request()->is($url) ? 'active' : '';
        return $active;
    }
    // forLast
    public static function commasLoop($loop)
    {
        if ($loop->last) {
            return '.';
        } elseif ($loop->remaining == 1) {
            return '&';
        } elseif (!$loop->first) {
            return ',';
        }
    }
}
