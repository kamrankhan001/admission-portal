<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Program;


class AllProgram extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = "", $searchby = "program_name", $program_id;
    public $degree_name, $program_name, $total_year, $total_semester, $registration_fee, $fee_per_semester;

    public function render()
    {
        return view('livewire.admin.all-program', [
            'programs' => Program::where($this->searchby, 'like', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(10)
        ]);
    }

    public function edit($id)
    {
        $program = Program::find($id);
        if ($program != null) {
            $this->program_id = $id;
            $this->degree_name = $program->degree_name;
            $this->program_name = $program->program_name;
            $this->total_year = $program->total_year;
            $this->total_semester = $program->total_semtr;
            $this->registration_fee = $program->register_fee;
            $this->fee_per_semester = $program->fee_per_semtr;
        } else {
            $this->redirect(route('add_program'));
        }

    }

    public function close_modal()
    {
        $this->reset();
    }

    public function student_update()
    {

        $program = Program::find($this->program_id);

        $program->degree_name = $this->degree_name;
        $program->program_name = $this->program_name;
        $program->total_year = $this->total_year;
        $program->total_semtr = $this->total_semester;
        $program->register_fee = $this->registration_fee;
        $program->fee_per_semtr = $this->fee_per_semester;

        $program->save();

        session()->flash('success', 'Program updated successfully 😃');
        $this->reset();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function delete(){

        Program::where('id', $this->program_id)->delete();
        session()->flash('success', 'Program deleted successfully 😇');
        $this->reset();
        $this->dispatchBrowserEvent('close-modal');
    }
}
