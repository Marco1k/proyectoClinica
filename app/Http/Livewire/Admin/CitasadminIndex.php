<?php

namespace App\Http\Livewire\Admin;


use App\Models\Cita;
use Livewire\Component;

use Livewire\WithPagination;

class CitasadminIndex extends Component
{
    use WithPagination;

    public $search;

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {



        $citas = Cita::where('name', 'LIKE', '%' .  $this->search . '%')
            ->latest('id')
            ->paginate();

        return view('livewire.admin.citasadmin-index', compact('citas'));
    }
}
