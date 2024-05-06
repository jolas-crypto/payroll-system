<?php

namespace App\Helpers;

use App\Models\SSSPremium;
use Illuminate\Support\Facades\Auth;

class PremiumsSssHelper
{
    public static function storeCustom($request)
    {
        $userId = Auth::user()->id;
        
        $request = $request->all();
        $request['created_by'] = $userId;

        return SSSPremium::create($request);
    }
}
