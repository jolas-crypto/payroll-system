<?php

namespace App\Http\Resources\Premium;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SSSPremiumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'year' => $this->year,
            'salary_from' => $this->salary_from,
            'salary_to' => $this->salary_to,
            'regular_salary_credit' => $this->regular_salary_credit,
            'mpf_salary_credit' => $this->mpf_salary_credit,
            'total_salary_credit' => $this->total_salary_credit,
            'regular_employer_share' => $this->regular_employer_share,
            'regular_employee_share' => $this->regular_employee_share,
            'total_share' => $this->total_share,
            'employer_compensation' => $this->employer_compensation,
            'employee_compensation' => $this->employee_compensation,
            'total_compensation' => $this->total_compensation,
            'mpf_employer' => $this->mpf_employer,
            'total_mpf' => $this->total_mpf,
            'total_employer' => $this->total_employer,
            'total_employee' => $this->total_employee,
            'total_overall' => $this->total_overall,
        ];
    }
}
