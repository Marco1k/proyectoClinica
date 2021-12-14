<?php

namespace App\Policies;

use App\Models\Cita;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CitaPolicy
{
    use HandlesAuthorization;


    // Para impedir que los usuarios entren en otros posts
    public function author(User $user, Cita $cita){

        if($user->id == $cita->user_id){
            return true;
        }else{
            return false;
        }

    }

    //Para impedir que un usuario pueda ver los borradores

    public function published(?User $user, Cita $cita){
        if($cita->status==2){
            return true;
        }else{
            return false;
        }



    }
}
