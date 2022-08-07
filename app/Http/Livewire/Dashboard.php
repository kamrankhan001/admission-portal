<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Program;


class Dashboard extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = "", $searchby = "program_name";

    public function render()
    {
        return view('livewire.dashboard', [
            'programs' => Program::where($this->searchby, 'like', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(10)
        ]);
    }
}
