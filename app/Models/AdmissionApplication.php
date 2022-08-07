<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'program',
        'user_id',
        'father_name',
        'father_cnic',
        'father_mobile_number',
        'father_occupation',
        'father_salary',
        'address',
        'hafiz_quran',
        'mobile_number',
        'matriculation',
        'total_marks_metric',
        'obtain_marks_metric',
        'intermediate',
        'total_marks_inter',
        'obtain_marks_inter',
        'matriculation_result',
        'intermediate_result',
        'cnic_card',
        'domicile',
        'challan',
        'challan_no',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
