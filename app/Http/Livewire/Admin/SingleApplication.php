<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\AdmissionApplication;


class SingleApplication extends Component
{
    use WithPagination;
    
    public $name, $user_id;
    protected $paginationTheme = 'bootstrap';
    public $search = "", $searchby = "cnic";

    public function render()
    {
        $applications = DB::table('users')
        ->where($this->searchby, 'like', '%'.$this->search.'%')
        ->join('admission_applications', 'users.id', '=', 'admission_applications.user_id')
        ->paginate(10);
        return view('livewire.admin.single-application', ['applications'=>$applications]);
    }

    public function edit($id)
    {
        $this->user_id = $id;
    }

    public function close_modal()
    {
        $this->reset();
    }

    public function accept(){
        $candidate = AdmissionApplication::find($this->user_id);
        $candidate->status = 'varified';
        $candidate->save();

        
        session()->flash('success', 'Application varified successfully 😃');
        $this->reset();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function reject(){
        $candidate = AdmissionApplication::find($this->user_id);
        $candidate->status = 'rejected';
        $candidate->save();

        
        session()->flash('success', 'Application rejected successfully 😃');
        $this->reset();
        $this->dispatchBrowserEvent('close-modal');
    }
}
