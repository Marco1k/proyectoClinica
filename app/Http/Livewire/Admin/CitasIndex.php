<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cita;
use Livewire\Component;


use Livewire\WithPagination;


class CitasIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;


    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        // Aqui el where anda comparando con el texto de la busqueda
        $citas = Cita::where('user_id', auth()->user()->id)
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate();

        return view('livewire.admin.citas-index', compact('citas'));
    }
}
