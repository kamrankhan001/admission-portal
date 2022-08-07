<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;


class AppliedCandidates extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = "", $searchby = "email";

    public function render()
    {
        $candidates = User::where('apply', 'yes')
        ->where('is_admin', 'no')
        ->where($this->searchby, 'like', '%'.$this->search.'%')
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('livewire.admin.applied-candidates', ['candidates'=>$candidates]);
    }
}
