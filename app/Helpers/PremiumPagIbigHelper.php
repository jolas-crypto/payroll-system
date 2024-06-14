<?php

namespace App\Helpers;

use App\Models\PagIbigPremium;

class PremiumPagIbigHelper
{
    public function storeCustom($request)
    {
        return PagIbigPremium::updateOrCreate(
            ['company_id' => 1],
            [
                'gross_pay_from' => $request['gross_pay_from'],
                'less_ee_share' => $request['less_ee_share'],
                'less_er_share' => $request['less_er_share'],
                'more_ee_share' => $request['more_ee_share'],
                'more_er_share' => $request['more_er_share'],
                'max_ee_share' => $request['max_ee_share'],
                'max_er_share' => $request['max_er_share']
            ]
        );
    }
}
