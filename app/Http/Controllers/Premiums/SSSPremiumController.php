<?php

namespace App\Http\Controllers\Premiums;

use App\Http\Controllers\Controller;
use App\Models\SSSPremium;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SSSPremiumController extends Controller
{
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
        //
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
        //
    }
}
