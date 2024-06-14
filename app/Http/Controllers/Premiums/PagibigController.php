<?php

namespace App\Http\Controllers\Premiums;

use App\Helpers\PremiumPagIbigHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Premiums\PagIbig\StoreRequest;
use App\Http\Resources\Premium\PagIbigPremiumResource;
use App\Http\Services\Lists\DataTableListFilter;
use App\Http\Services\Lists\PagIbigList;
use App\Models\PagIbigPremium;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PagibigController extends Controller
{
    private $pagIbigPremium;

    public function __construct(PremiumPagIbigHelper $premiumPagIbigHelper)
    {
        $this->pagIbigPremium = $premiumPagIbigHelper;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'pagIbigInfo' => PagIbigPremium::all(),
        ];

        return view('pages.payrolls.premiums.pagibig.index', compact('data'));
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
    public function store(StoreRequest $storeRequest)
    {
        $premiumPagIbig = $this->pagIbigPremium->storeCustom($storeRequest);

        return response()->json([
            'data' => $premiumPagIbig,
            'message' => 'Successfully Saved!'
        ], Response::HTTP_OK);
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
    public function update(Request $request, PagIbigPremium $pagIbigPremium)
    {
        $pagIbigPremium->update($request->all());

        return response()->json(['message' => 'Pag-ibig Premium updated successfully'], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function list(Request $request)
    {
        $queries = $request->queries ?? '';
        $column = PagIbigList::COLUMNS;
        $pagIbigPremiumList = (new PagIbigList())->process($column, $queries);
        $paginationResource = DataTableListFilter::getAllData($pagIbigPremiumList);

        return PagIbigPremiumResource::collection($paginationResource);
    }
}
