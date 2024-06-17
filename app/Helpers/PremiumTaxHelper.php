<?php

namespace App\Helpers;

use App\Models\TaxPremium;
use Illuminate\Support\Facades\Auth;

class PremiumTaxHelper
{
    public function storeCustom($request)
    {
        $userId = Auth::user()->id;

        return TaxPremium::updateOrCreate(
            ['type' => $request->type],
            [
                'company_id' => 1,
                'income_1' => $request->income_1,
                'income_2' => $request->income_2,
                'income_3' => $request->income_3,
                'income_4' => $request->income_4,
                'income_5' => $request->income_5,
                'income_6' => $request->income_6,
                'income_7' => $request->income_7,
                'income_8' => $request->income_8,
                'exempt_1' => $request->exempt_1,
                'exempt_2' => $request->exempt_2,
                'exempt_3' => $request->exempt_3,
                'exempt_4' => $request->exempt_4,
                'exempt_5' => $request->exempt_5,
                'exempt_6' => $request->exempt_6,
                'exempt_7' => $request->exempt_7,
                'exempt_8' => $request->exempt_8,
                'percent_1' => $request->percent_1,
                'percent_2' => $request->percent_2,
                'percent_3' => $request->percent_3,
                'percent_4' => $request->percent_4,
                'percent_5' => $request->percent_5,
                'percent_6' => $request->percent_6,
                'percent_7' => $request->percent_7,
                'percent_8' => $request->percent_8,
                'created_by' => $userId
            ]
        );
    }
}
