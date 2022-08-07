<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\AdmissionApplication;
use App\Models\User;
use App\Models\Admin\SetAdmissionDate;


class AdmissionForm extends Component
{

    use WithFileUploads;

    public $currentStep = 1, $status = 1, $degree, $rolled = false;
    public $father_name, $father_cnic, $father_mobile_number, $father_occupation, $father_salary, $address, $hafiz_quran, $mobile_number;
    public $matriculation, $total_marks_metric, $obtain_marks_metric, $intermediate, $total_marks_inter, $obtain_marks_inter;
    public $matriculation_result, $intermediate_result, $cnic_card, $domicile;


    public function render()
    {
        $check = AdmissionApplication::where('user_id', auth()->user()->id)->where('program', $this->degree)->first();
        if($check != null){
            $this->rolled = true;
        }
        return view('livewire.admission-form');
    }

    public function personalinfo()
    {
        $this->validate([
            'father_name' => 'required|max:20',
            'father_cnic' => 'required|numeric',
            'father_mobile_number' => 'required|numeric',
            'father_occupation' => 'required|max:30',
            'father_salary' => 'required|numeric',
            'address' => 'required|max:50',
            'hafiz_quran' => 'required',
            'mobile_number' => 'required|numeric',
        ]);

        $this->currentStep = 2;
    }

    public function educationinfo()
    {
        $this->validate([
            'matriculation' => 'required',
            'total_marks_metric' => 'required|numeric',
            'obtain_marks_metric' => 'required|numeric',
            'intermediate' => 'required',
            'total_marks_inter' => 'required|numeric',
            'obtain_marks_inter' => 'required|numeric',
        ]);

        $this->currentStep = 3;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function submitForm()
    {
      
        $this->validate([
            'matriculation_result' => 'required|mimes:jpg,png,jpeg|max:2048',
            'intermediate_result' => 'required|mimes:jpg,png,jpeg|max:2048',
            'cnic_card' => 'required|mimes:jpg,png,jpeg|max:2048',
            'domicile' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        $metric = $this->matriculation_result->store('public/metric');
        $metric = explode('/',$metric);
        array_shift($metric);
        $metric = implode('/',$metric);

        $inter = $this->intermediate_result->store('public/inter');
        $inter = explode('/',$inter);
        array_shift($inter);
        $inter = implode('/',$inter);

        $cnic = $this->cnic_card->store('public/cnic');
        $cnic = explode('/',$cnic);
        array_shift($cnic);
        $cnic = implode('/',$cnic);

        $domicile = $this->domicile->store('public/domicile');
        $domicile = explode('/',$domicile);
        array_shift($domicile);
        $domicile = implode('/',$domicile);

        $challan = SetAdmissionDate::orderby('id', 'desc')->first();

        AdmissionApplication::create([
            'program' => $this->degree,
            'user_id' => auth()->user()->id,
            'father_name' => $this->father_name,
            'father_cnic' => $this->father_cnic,
            'father_mobile_number' => $this->father_mobile_number,
            'father_occupation' => $this->father_occupation,
            'father_salary' => $this->father_salary,
            'address' => $this->address,
            'hafiz_quran' => $this->hafiz_quran,
            'mobile_number' => $this->mobile_number,
            'matriculation' => $this->matriculation,
            'total_marks_metric' => $this->total_marks_metric,
            'obtain_marks_metric' => $this->obtain_marks_metric,
            'intermediate' => $this->intermediate,
            'total_marks_inter' => $this->total_marks_inter,
            'obtain_marks_inter' => $this->obtain_marks_inter,
            'matriculation_result' => $metric,
            'intermediate_result' => $inter,
            'cnic_card' => $cnic,
            'domicile' => $domicile,
            'challan_no' => $challan->challan_no
        ]);

        $challan->challan_no = intval( $challan->challan_no) + 1;
        $challan->save();

        $candidate = User::find(auth()->user()->id);
        $candidate->apply = 'yes';
        $candidate->save();
  
    }

}
