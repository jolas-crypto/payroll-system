<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SSSPremium extends Model
{
    use HasFactory;

    protected $table = 'sss_premiums';

    // protected $fillable = [
    //     'year',
    //     'salary_from',
    //     'salary_to',
    //     'regular_salary_credit',
    //     'mpf_salary_credit',
    //     'total_salary_credit'
    // ];
}
