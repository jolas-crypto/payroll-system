<?php

namespace App\Http\Controllers\Premiums;

use App\Helpers\PremiumTaxHelper;
use App\Http\Controllers\Controller;
use App\Models\TaxPremium;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaxController extends Controller
{
    private $tax;

    public function __construct(PremiumTaxHelper $premiumTaxHelper)
    {
        $this->tax = $premiumTaxHelper;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'taxType' => config('constant.TAX_TYPE')
        ];

        return view('pages.payrolls.premiums.tax.index', compact('data'));
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
        $taxes = $this->tax->storeCustom($request);

        return response()->json([
            'data' => $taxes,
            'message' => 'Successfully Saved!'
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(TaxPremium $taxPremium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaxPremium $taxPremium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaxPremium $taxPremium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaxPremium $taxPremium)
    {
        //
    }

    public function getFilterTypeTax($type)
    {
        $filterTax = TaxPremium::where('type', $type)->first();

        return response()->json([
            'data' => $filterTax,
            'message' => 'Successfully fetch!'
        ], Response::HTTP_OK);
    }
}
