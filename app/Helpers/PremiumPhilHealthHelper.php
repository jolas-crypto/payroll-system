<?php

namespace App\Helpers;

use App\Models\PhilHealthPremium;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PremiumPhilHealthHelper
{
    private $response;

    public function storeCustom($request)
    {
        $userId = Auth::user()->id;

        $request = $request->all();
        $request['created_by'] = $userId;

        return PhilHealthPremium::create($request);
    }

    public function updateCustom($request)
    {
        $userId = Auth::user()->id;

        $philHealthPremiums = PhilHealthPremium::where('id', $request->id)->first();

        $philHealthPremiums->company_id = 1;
        $philHealthPremiums->reported_id = 1;
        $philHealthPremiums->salary_from = $request->salary_from;
        $philHealthPremiums->salary_to = $request->salary_to;
        $philHealthPremiums->employee_share = $request->employee_share;
        $philHealthPremiums->employer_share = $request->employer_share;
        $philHealthPremiums->total_ee_er_share = $request->total_ee_er_share;
        $philHealthPremiums->salary_credit = $request->salary_credit;
        $philHealthPremiums->updated_by = $userId;
        $philHealthPremiums->updated_at = now()->format('Y-m-d H:i:s');
        $philHealthPremiums->save();

        return $philHealthPremiums;
    }

    public function destroyCustom($id)
    {
        $deletePhilHealth = PhilHealthPremium::where('id', $id)->first();

        if (!$deletePhilHealth) {
            return response()->json([
                'message' => 'Phil Health not found!'
            ], Response::HTTP_NOT_FOUND);
        }

        $deletePhilHealth->delete();
    }
}
