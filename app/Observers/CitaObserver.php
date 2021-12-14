<?php

namespace App\Observers;

use App\Models\Cita;
use Illuminate\Support\Facades\Storage;

class CitaObserver
{
    public function creating(Cita $cita)
    {
        if(! \App::runningInConsole()) {

            $cita->user_id = auth()->user()->id;
        }
    }

    public function deleting(Cita $cita)
    {
        if($cita->image){
            Storage::delete($cita->image->url);
        }
    }
}
