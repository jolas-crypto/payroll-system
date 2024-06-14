<?php

namespace App\Http\Controllers\Premiums;

use App\Helpers\DateHelper;
use App\Helpers\PremiumPhilHealthHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\Premium\PhilHealthPremiumResource;
use App\Http\Services\Lists\DataTableListFilter;
use App\Http\Services\Lists\PhilHealthList;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PhilHealthController extends Controller
{
    private $philHealth;

    public function __construct(PremiumPhilHealthHelper $premiumPhilHealthHelper)
    {
        $this->philHealth = $premiumPhilHealthHelper;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'tableHeader' => PhilHealthList::COLUMNS,
            'yearList' => DateHelper::getLessThanCurrentDate(config('constant.START_YEAR')),
        ];

        return view('pages.payrolls.premiums.philhealth.index', compact('data'));
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
        $premiums = $this->philHealth->storeCustom($request);

        return response()->json([
            'data' => $premiums,
            'message' => 'Successfully added.'
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
    public function update(Request $request, string $id)
    {
        $this->philHealth->updateCustom($request);

        return response()->json([
            'message' => 'Successfully updated!'
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->philHealth->destroyCustom($id);

        return response()->json([
            'message' => 'Successfully Deleted'
        ], Response::HTTP_OK);
    }

    public function list(Request $request)
    {
        $queries = $request->queries ?? '';
        $column = PhilHealthList::COLUMNS;
        $philHealthPremiumList = (new PhilHealthList())->process($column, $queries);
        $paginationResource = DataTableListFilter::getAllData($philHealthPremiumList);

        return PhilHealthPremiumResource::collection($paginationResource);
    }
}
