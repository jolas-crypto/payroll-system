<?php

namespace App\Http\Controllers\Premiums;

use App\Http\Controllers\Controller;
use App\Http\Requests\Premiums\SSS\ImportRequest;
use App\Services\PremiumsProcessImport;
use Symfony\Component\HttpFoundation\Response;

class ImportSssPremiumController extends Controller
{
    protected $importProcessServices;

    public function __construct(PremiumsProcessImport $premiumsProcessImport)
    {
        $this->importProcessServices = $premiumsProcessImport;
    }

    public function import(ImportRequest $importRequest)
    {
        $this->importProcessServices->import($importRequest->file('file'));

        return response()->json([
            'message' => 'CSV file imported successfully!'
        ], Response::HTTP_OK);
    }
}
