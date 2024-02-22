<?php

namespace App\Http\Controllers\Premiums;

use App\Http\Controllers\Controller;
use App\Http\Resources\Premium\SSSPremiumResource;
use App\Http\Services\Lists\DataTableListFilter;
use App\Http\Services\Lists\SSSList;
use App\Models\SSSPremium;
use Illuminate\Http\Request;

class PremiumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'tableHeader' => SSSList::COLUMNS
        ];

        return view('pages.payrolls.premiums.index', compact('data'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * List of the resource with using Interface of Process
     */
    public function list(Request $request)
    {
        $queries = $request->queries ?? '';
        $columns = SSSList::COLUMNS;
        $sssPremiumList = (new SSSList())->process($columns, $queries);

        $paginationResources = DataTableListFilter::paginateData($sssPremiumList, $request);

        return SSSPremiumResource::collection($paginationResources);
    }
}
