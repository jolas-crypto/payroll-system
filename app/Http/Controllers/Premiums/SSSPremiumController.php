<?php

namespace App\Http\Controllers\Premiums;

use App\Helpers\PremiumsSssHelper;
use App\Http\Controllers\Controller;
use App\Models\SSSPremium;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SSSPremiumController extends Controller
{
    private $premiumSSS;

    public function __construct(PremiumsSssHelper $premiumsSssHelper)
    {
        $this->premiumSSS = $premiumsSssHelper;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $premiums = $this->premiumSSS->storeCustom($request);

        return response()->json([
            'data' => $premiums,
            'message' => 'Post was successfully added.'
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(SSSPremium $sssPremium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SSSPremium $sssPremium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SSSPremium $sssPremium)
    {
        $sssPremium->update($request->all());

        return response()->json(['message' => 'SSS Premium updated successfully'], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SSSPremium $sssPremium)
    {
        $sssPremium->delete();

        return response()->json(['message' => 'Successfully Deleted!'], Response::HTTP_OK);
    }
}
