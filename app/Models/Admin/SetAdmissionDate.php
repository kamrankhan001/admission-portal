<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetAdmissionDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'opening_date',
        'closing_date',
        'challan_no',
        'batch_no'
    ];
}
