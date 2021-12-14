<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

    public function getRouteKeyName()
    {
        return "slug";
    }


    // relación muchos a muchos

    public function citas(){
        return $this->belongsToMany(Cita::class);
    }
}
