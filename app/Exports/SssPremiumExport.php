<?php

namespace App\Exports;

use App\Models\SSSPremium;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SssPremiumExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Created At',
            'Updated At',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SSSPremium::all();
    }
}
