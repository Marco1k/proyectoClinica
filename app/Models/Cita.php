<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Relación uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // relación muchos a muchos

    public function tipos(){
        return $this->belongsToMany(Tipo::class);
    }

    //relacion uno a uno  poliformica

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

}
