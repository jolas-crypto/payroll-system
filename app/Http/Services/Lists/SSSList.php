<?php

namespace App\Http\Services\Lists;

use App\Http\Services\Interfaces\InterfaceList;
use App\Models\Premium;
use App\Models\PremiumSSS;
use App\Models\SSSPremium;

class SSSList extends DataTableListFilter implements InterfaceList
{
    const COLUMNS = [
        [
            'field' => 'year',
            'label' => 'Year',
            'sortable' => false,
            'searchable' => false,
            'searchable_field' > 'sss_premiums.year'
        ],
        [
            'field' => 'salary_from',
            'label' => 'Salary From',
            'sortable' => false,
            'searchable' => false,
            'searchable_field' > 'sss_premiums.salary_from'
        ],
        [
            'field' => 'salary_to',
            'label' => 'Salary To',
            'sortable' => false,
            'searchable' => false,
            'searchable_field' > 'sss_premiums.salary_to'
        ],
        [
            'field' => 'regular_salary_credit',
            'label' => 'Regular Salary Credit',
            'sortable' => false,
            'searchable' => false,
            'searchable_field' > 'sss_premiums.regular_salary_credit'
        ],
        [
            'field' => 'mpf_salary_credit',
            'label' => 'MPF Salary Credit',
            'sortable' => false,
            'searchable' => false,
            'searchable_field' > 'sss_premiums.mpf_salary_credit'
        ],
        [
            'field' => 'total_salary_credit',
            'label' => 'Total Salary Credit',
            'sortable' => false,
            'searchable' => false,
            'searchable_field' > 'sss_premiums.total_salary_credit'
        ],
        [
            'field' => 'actions',
            'label' => 'Actions',
            'has_slot' => true,
        ],

    ];

    public function process($columns, $queries)
    {
        $sssPremiums = SSSPremium::query();
        $data = $this->wildCardFilter($sssPremiums, $queries, $columns);

        return $data;
    }
}
