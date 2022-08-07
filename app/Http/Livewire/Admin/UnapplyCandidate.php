<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;


class UnapplyCandidate extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = "", $searchby = "email";

    public function render()
    {
        $candidates = User::where('apply', 'no')
        ->where('is_admin', 'no')
        ->where($this->searchby, 'like', '%'.$this->search.'%')
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('livewire.admin.unapply-candidate', ['candidates'=>$candidates]);
    }
}
