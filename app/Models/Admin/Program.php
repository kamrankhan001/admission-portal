<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'degree_name',
        'program_name',
        'total_year',
        'total_semtr',
        'register_fee',
        'fee_per_semtr'
    ];
}
