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
            'field' => 'id',
            'label' => 'No.',
            'has_counter' => true,
        ],
        [
            'field' => 'year',
            'label' => 'Year',
            'searchable' => true,
            'searchable_field' => 'year',
        ],
        [
            'field' => 'salary_from',
            'label' => 'Salary From',
            'sortable' => false,
        ],
        [
            'field' => 'salary_to',
            'label' => 'Salary To',
            'sortable' => false,
        ],
        [
            'field' => 'regular_salary_credit',
            'label' => 'Regular Salary Credit',
            'sortable' => false,
        ],
        [
            'field' => 'mpf_salary_credit',
            'label' => 'MPF Salary Credit',
            'sortable' => false,
        ],
        [
            'field' => 'total_salary_credit',
            'label' => 'Total Salary Credit',
            'sortable' => false,
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
