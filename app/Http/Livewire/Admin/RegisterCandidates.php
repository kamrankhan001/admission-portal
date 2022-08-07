<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;


class RegisterCandidates extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = "", $searchby = "email";

    public function render()
    {
        return view('livewire.admin.register-candidates', [
            'candidates' => User::where('is_admin', 'no')->where($this->searchby, 'like', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(10)
        ]);
    }
}
