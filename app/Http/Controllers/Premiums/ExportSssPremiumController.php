<?php

namespace App\Http\Controllers\Premiums;

use App\Http\Controllers\Controller;
use App\Models\SSSPremium;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExportSssPremiumController extends Controller
{
    public function export()
    {
        $premiums = SSSPremium::all();

        $response = new StreamedResponse(function () use ($premiums) {
            $handle = fopen('php://output', 'w');

            fputcsv($handle, config('premiums.sss'));

            foreach ($premiums as $premium) {
                fputcsv($handle, [
                    $premium->year,
                    $premium->salary_from,
                    $premium->salary_to,
                    $premium->regular_salary_credit,
                    $premium->mpf_salary_credit,
                    $premium->total_salary_credit,
                    $premium->regular_employer_share,
                    $premium->regular_employee_share,
                    $premium->total_share,
                    $premium->employer_compensation,
                    $premium->employee_compensation,
                    $premium->total_compensation,
                    $premium->mpf_employer,
                    $premium->mpf_employee,
                    $premium->total_mpf,
                    $premium->total_employer,
                    $premium->total_employee,
                    $premium->total_overall
                ]);
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');

        return $response;
    }
}
