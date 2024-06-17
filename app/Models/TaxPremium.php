<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxPremium extends Model
{
    use HasFactory;

    protected $table = 'tax_premiums';

    protected $guarded = [];
}
