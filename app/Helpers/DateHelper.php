<?php

namespace App\Helpers;

class DateHelper {

    public static function getLessThanCurrentDate($startYear)
    {
        $currentYear = date('Y');
        $years = [];

        for ($year = $startYear; $year <= $currentYear; $year++) {
            $years[] = $year;
        }

        rsort($years);

        return $years;
    }

}
