<?php

namespace App\Http\Services\Lists;

use App\Http\Services\Interfaces\InterfaceList;
use App\Models\PhilHealthPremium;

class PhilHealthList extends DataTableListFilter implements InterfaceList
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
            'field' => 'employee_share',
            'label' => 'Employee Share',
            'sortable' => false,
        ],
        [
            'field' => 'employer_share',
            'label' => 'Employer Share',
            'sortable' => false,
        ],
        [
            'field' => 'total_ee_er_share',
            'label' => 'Total EE ER Share',
            'sortable' => false,
        ],
        [
            'field' => 'salary_credit',
            'label' => 'Salary Credit',
            'sortable' => false,
        ],
        [
            'field' => 'actions',
            'label' => 'Actions',
            'has_slot' => true,
        ], 
    ];

    public function process($column, $queries)
    {
        $pagIbigPremium = PhilHealthPremium::query();
        $data = $this->wildCardFilter($pagIbigPremium, $queries, $column);

        return $data;
    }
}
