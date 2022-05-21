<?php
namespace App\Helpers;

class Format
{
    static function dateUsToBr($date)
    {
        return date('d/m/Y', strtotime($date));
    }

    static function dateBrToUs($date)
    {
        return date('Y-m-d', strtotime(str_replace('/', '-', $date)));
    }
}
